<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeriodeResource\Pages;
use App\Filament\Resources\PeriodeResource\RelationManagers;
use App\Models\Periode;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeriodeResource extends Resource
{
    protected static ?string $model = Periode::class;

    protected static ?string $navigationLabel = 'Purnawira';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Landing';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tahun')
                    ->label('Tahun')
                    ->required()
                    ->columnSpanFull()
                    ->placeholder('Masukkan tahun periode')
                    ->helperText('Contoh: 2024-2025'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(
                fn() => Periode::query()
                    ->withCount('purnawiras')
                    ->orderBy('tahun', 'desc')
            )
            ->columns([
                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('purnawiras_count')
                    ->label('Jumlah Alumni'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make('purnawiras')
                    ->label('Manage Alumni')
                    ->url(fn(Periode $record): string => PeriodeResource::getUrl('purnawiras', ['record' => $record])),
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
            'index' => Pages\ManagePeriodes::route('/'),
            'purnawiras' => Pages\ManagePurnawiras::route('/{record}/purnawiras'),
        ];
    }
}
