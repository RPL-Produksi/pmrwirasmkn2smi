<?php

namespace App\Filament\Resources\BidangResource\Pages;

use App\Filament\Resources\BidangResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBidangs extends ManageRecords
{
    protected static string $resource = BidangResource::class;

    protected static null|string $title = 'Bidang';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
