<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengumumanResource\Pages;
use App\Filament\Resources\PengumumanResource\RelationManagers;
use App\Models\Pengumuman;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static ?string $navigationLabel = 'Pengumuman';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Landing';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Form Pengumuman')
                    ->schema([
                        TextInput::make('judul')
                            ->label('Judul Pengumuman')
                            ->required()
                            ->maxLength(255),

                        DatePicker::make('tanggal')
                            ->label('Tanggal Kegiatan')
                            ->native(false),

                        TextInput::make('waktu')
                            ->label('Waktu (misal: 08.00 - Selesai)')
                            ->maxLength(50),

                        TextInput::make('tempat')
                            ->label('Tempat Kegiatan')
                            ->maxLength(255),

                        Select::make('kategori')
                            ->label('Kategori Pengumuman')
                            ->options([
                                'penting' => 'Penting (kuning)',
                                'rutin' => 'Rutin (biru)',
                                'lainnya' => 'Lainnya (abu)',
                            ])
                            ->default('lainnya')
                            ->columnSpanFull()
                            ->required(),
                        RichEditor::make('isi')
                            ->label('Isi Pengumuman')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul Pengumuman')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),
                SelectColumn::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'penting' => 'Penting (kuning)',
                        'rutin' => 'Rutin (biru)',
                        'lainnya' => 'Lainnya (abu)',
                    ])
                    ->sortable(),
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
            'index' => Pages\ManagePengumumen::route('/'),
        ];
    }
}
