<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StrukturResource\Pages;
use App\Filament\Resources\StrukturResource\RelationManagers;
use App\Models\Struktur;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StrukturResource extends Resource
{
    protected static ?string $model = Struktur::class;

    protected static ?string $navigationLabel = 'Struktur Organisasi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Landing';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('holder_name')->label('Nama Pengurus')->required()->placeholder('Masukkan nama pengurus'),
                TextInput::make('name')->label('Jabatan')
                    ->required()
                    ->placeholder('Masukkan nama jabatan'),
                Select::make('divisi')->label('Divisi')->options([
                    'Inti' => 'Inti',
                    'Unit' => 'Unit',
                ])->required()->reactive()->columnSpanFull(),
                Select::make('unit')->label('Unit')->options([
                    'Unit 1 - Pendidikan Kesehatan' => 'Unit 1',
                    'Unit 2 - Bakti Masyarakat' => 'Unit 2',
                    'Unit 3 - Persahabatan' => 'Unit 3',
                    'Unit 4  - Media Informasi dan Komunikasi' => 'Unit 4',
                ])->nullable()->placeholder('Pilih unit')->columnSpanFull()->visible(fn(Get $get) => $get('divisi') === 'Unit'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Jabatan')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('holder_name')
                    ->label('Nama Pengurus')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('divisi')
                    ->label('Divisi')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('unit_display')->label('Unit'),

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
            'index' => Pages\ManageStrukturs::route('/'),
        ];
    }
}
