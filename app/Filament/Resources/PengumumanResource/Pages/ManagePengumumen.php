<?php

namespace App\Filament\Resources\PengumumanResource\Pages;

use App\Filament\Resources\PengumumanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePengumumen extends ManageRecords
{
    protected static string $resource = PengumumanResource::class;

    protected static null|string $title = 'Pengumuman';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
