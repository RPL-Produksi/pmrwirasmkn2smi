<?php

namespace App\Filament\Resources\PeriodeResource\Pages;

use App\Filament\Resources\PeriodeResource;
use App\Models\Purnawira;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class ManagePurnawiras extends Page implements HasTable
{
    use InteractsWithRecord, InteractsWithTable;

    protected static string $resource = PeriodeResource::class;

    protected static string $view = 'filament.resources.periode-resource.pages.manage-purnawiras';

    public function getTitle(): string|Htmlable
    {
        return 'Manage Alumni - ' . $this->record->tahun;
    }

    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make()
                ->label('New alumni')
                ->modalHeading('Create alumni')
                ->form([
                    TextInput::make('name')
                        ->label('Nama')
                        ->required(),
                    TextInput::make('jabatan')
                        ->label('Jabatan')
                        ->required(),
                    Textarea::make('quotes')
                        ->label('Quotes'),
                    FileUpload::make('image')
                        ->label('Foto')
                        ->image()
                        ->required(),
                ])
                ->action(function (array $data) {
                    Purnawira::create(array_merge($data, ['periode_id' => $this->record->id]));
                }),
        ];
    }

    protected function getTableQuery(): Builder|Relation|null
    {
        return Purnawira::query()->where('periode_id', $this->record->id)->with('periode');
    }

    protected function getTableColumns(): array
    {
        return [
            ImageColumn::make('image')
                ->label('Foto')
                ->circular()
                ->size(50),
            TextColumn::make('name')
                ->label('Nama')
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('jabatan')
                ->label('Jabatan')
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('quotes')
                ->label('Quotes')
                ->sortable()
                ->searchable()
                ->toggleable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            EditAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            \Filament\Tables\Actions\BulkActionGroup::make([
                DeleteBulkAction::make(),
            ]),
        ];
    }
}
