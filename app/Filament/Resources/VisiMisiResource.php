<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiResource\Pages;
use App\Filament\Resources\VisiMisiResource\RelationManagers;
use App\Models\VisiMisi;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiMisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;

    protected static ?string $navigationLabel = 'Visi & Misi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Landing';

    public static function canCreate(): bool
    {
        return VisiMisi::count() === 0;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_ketua')->label('Nama Ketua')
                    ->required()
                    ->placeholder('Masukkan nama ketua'),
                TextInput::make('periode')->label('Periode')
                    ->required()
                    ->helperText('Contoh: 2023-2024')
                    ->placeholder('Masukkan periode'),
                FileUpload::make('image')
                    ->label('Foto Ketua')
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory('visi-misi')
                    ->imageCropAspectRatio('1:1')
                    ->columnSpanFull(),

                Section::make('Visi & Misi')
                    ->schema([
                        Textarea::make('visi')
                            ->label('Visi')
                            ->required()
                            ->rows(4)
                            ->placeholder('Masukkan visi'),

                        Repeater::make('misi')->label('Misi')
                            ->required()
                            ->schema([
                                TextInput::make('value')
                                    ->label('Poin Misi')
                                    ->required(),
                            ])
                            ->defaultItems(1)
                            ->minItems(1)
                            ->addActionLabel('Add Misi')
                            ->columnSpanFull()
                            ->collapsible(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto Ketua')
                    ->circular()
                    ->size(50),
                TextColumn::make('nama_ketua')
                    ->label('Nama Ketua')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('periode')
                    ->label('Periode')
                    ->searchable()
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
            'index' => Pages\ManageVisiMisis::route('/'),
        ];
    }
}
