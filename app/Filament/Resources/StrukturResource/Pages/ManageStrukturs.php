<?php

namespace App\Filament\Resources\StrukturResource\Pages;

use App\Filament\Resources\StrukturResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageStrukturs extends ManageRecords
{
    protected static string $resource = StrukturResource::class;

    protected static null|string $title = 'Struktur Organisasi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
