<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan judul blog...'),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'pending' => 'Pending Review',
                        'archived' => 'Archived',
                    ])
                    ->default('draft')
                    ->reactive()
                    ->afterStateUpdated(function (Set $set, $state) {
                        if ($state === 'published') {
                            $set('published_at', now());
                        } else {
                            $set('published_at', null);
                        }
                    }),

                TagsInput::make('tags')
                    ->label('Tags')
                    ->placeholder('Tambah tag...')
                    ->columnSpanFull()
                    ->nullable(),

                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('thumbnails')
                    ->columnSpanFull()
                    ->nullable(),

                Builder::make('body')
                    ->label('Konten')
                    ->blocks([
                        Block::make('paragraph')
                            ->schema([
                                Textarea::make('text')
                                    ->label('Teks')
                                    ->rows(4),
                            ]),

                        Block::make('heading')
                            ->schema([
                                TextInput::make('text')
                                    ->label('Judul')
                                    ->required(),
                                Select::make('level')
                                    ->label('Level')
                                    ->options([
                                        'h1' => 'Heading 1',
                                        'h2' => 'Heading 2',
                                        'h3' => 'Heading 3',
                                    ])
                                    ->default('h2'),
                            ]),

                        Block::make('image')
                            ->schema([
                                FileUpload::make('url')
                                    ->image()
                                    ->directory('blocks')
                                    ->label('Gambar'),
                                TextInput::make('caption')
                                    ->label('Caption')
                                    ->nullable(),
                            ]),
                    ])
                    ->columnSpanFull()
                    ->nullable(),

                Hidden::make('published_at')
                    ->dehydrated()
                    ->nullable(),

                Hidden::make('user_id')
                    ->default(Auth::id())
                    ->dehydrated()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->label('Thumbnail')
                    ->disk('public')
                    ->circular(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('user.name')
                    ->label('Penulis')
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('published_at', 'desc')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
