<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BidangResource\Pages;
use App\Filament\Resources\BidangResource\RelationManagers;
use App\Models\Bidang;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BidangResource extends Resource
{
    protected static ?string $model = Bidang::class;

    protected static ?string $navigationLabel = 'Bidang';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nama Bidang')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('cover')
                    ->helperText('Max: 2MB')
                    ->label('Cover')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('bidang')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(fn() => Bidang::query()->withCount('anggota'))
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Bidang')
                    ->sortable(),

                TextColumn::make('anggota_count')
                    ->label('Jumlah Anggota')
                    ->alignCenter(),

                ImageColumn::make('cover')
                    ->label('Cover')
                    ->disk('public')
                    ->visibility('public'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make('anggotas')
                    ->label('Manage Anggota')->url(fn(Bidang $record): string => BidangResource::getUrl('anggotas', ['record' => $record])),
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
            'index' => Pages\ManageBidangs::route('/'),
            'anggotas' => Pages\ManageBidangAnggota::route('/{record}/anggota'),
        ];
    }
}
