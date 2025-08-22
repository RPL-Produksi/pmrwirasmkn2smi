<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiResource\Pages;
use App\Filament\Resources\PrestasiResource\RelationManagers;
use App\Models\Prestasi;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationLabel = 'Prestasi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('event')
                    ->label('Event')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->placeholder('Masukkan nama event')
                    ->afterStateUpdated(function ($state, $set) {
                        $set('slug', Str::slug($state));
                    }),
                Hidden::make('slug')
                    ->default(fn($get) => Str::slug($get('event') ?? '')),
                RichEditor::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull()
                    ->placeholder('Masukkan deskripsi event'),
                FileUpload::make('attachments')
                    ->label('Lampiran')
                    ->multiple()
                    ->disk('public')
                    ->directory('prestasi')
                    ->columnSpanFull()
                    ->afterStateHydrated(function ($component, $state, $record) {
                        if ($record) {
                            $component->state(
                                $record->attachments->pluck('storage_path')->toArray()
                            );
                        }
                    })
                    ->dehydrateStateUsing(fn($state) => $state ?? [])
                    ->saveRelationshipsUsing(function ($state, $record) {
                        if ($record) {
                            // hapus data lama
                            $record->attachments()->delete();

                            // simpan hanya yang valid (bukan null/kosong)
                            foreach (array_filter($state) as $file) {
                                $record->attachments()->create([
                                    'prestasi_id'   => $record->id,
                                    'storage_path'  => $file,
                                ]);
                            }
                        }
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event')->label('Event')->alignStart()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePrestasis::route('/'),
        ];
    }
}
