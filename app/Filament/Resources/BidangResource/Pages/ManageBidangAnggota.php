<?php

namespace App\Filament\Resources\BidangResource\Pages;

use App\Filament\Resources\BidangResource;
use App\Models\BidangAnggota;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\Page;
use Filament\Tables\Actions\BulkActionGroup;
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

class ManageBidangAnggota extends Page implements HasTable
{
    use InteractsWithRecord, InteractsWithTable;

    protected static string $resource = BidangResource::class;

    protected static string $view = 'filament.resources.bidang-resource.pages.manage-bidang-anggota';

    public function getTitle(): string|Htmlable
    {
        return 'Manage Anggota - ' . $this->record->name;
    }

    public function mount(int | string $record): void
    {
        $this->record =  $this->resolveRecord($record);
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make('anggota')
                ->label('New Anggota')
                ->modalHeading('Create Anggota')
                ->form([
                    TextInput::make('name')
                        ->label('Nama')
                        ->required(),
                    TextInput::make('role')
                        ->helperText('Contoh: Pelaku A (Optional)')
                        ->label('Role'),
                    Textarea::make('quotes')
                        ->label('Quotes'),
                    FileUpload::make('image')
                        ->label('Foto')
                        ->image()
                        ->disk('public')
                        ->directory('bidang-anggota')
                        ->imageCropAspectRatio('1:1')
                        ->required(),
                ])->action(function (array $data) {
                    BidangAnggota::create(array_merge($data, ['bidang_id' => $this->record->id]));
                }),
            CreateAction::make('attachment')
                ->label('Dokumentasi')
                ->icon('heroicon-o-document-plus')
                ->modalHeading('Add Dokumentasi')
                ->form([
                    FileUpload::make('storage_path')
                        ->label('Dokumentasi')
                        ->image()
                        ->disk('public')
                        ->directory('bidang-attachments')
                        ->multiple()
                        ->required(),
                ])->action(function (array $data) {
                    $this->record->attachments()->createMany(array_map(fn($path) => ['storage_path' => $path], $data['storage_path']));
                }),
        ];
    }

    protected function getTableQuery(): Builder|Relation|null
    {
        return BidangAnggota::query()->where('bidang_id', $this->record->id);
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
            TextColumn::make('role')
                ->label('Role'),
            TextColumn::make('quotes')
                ->label('Quotes'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            EditAction::make('edit')
                ->label('Edit Anggota')
                ->form([
                    TextInput::make('name')
                        ->label('Nama')
                        ->required(),
                    TextInput::make('role')
                        ->helperText('Contoh: Pelaku A (Optional)')
                        ->label('Role'),
                    Textarea::make('quotes')
                        ->label('Quotes'),
                    FileUpload::make('image')
                        ->label('Foto')
                        ->image()
                        ->disk('public')
                        ->directory('bidang-anggota')
                        ->imageCropAspectRatio('1:1')
                        ->required(),
                ])->action(function (array $data) {
                    BidangAnggota::where('id', $this->record->id)->update($data);
                }),
            DeleteAction::make(),
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            BulkActionGroup::make([
                DeleteBulkAction::make()
            ])
        ];
    }
}
