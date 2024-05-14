<?php

namespace App\Filament\Resources\PusatBantuanResource\Pages;

use App\Filament\Resources\PusatBantuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPusatBantuans extends ListRecords
{
    protected static string $resource = PusatBantuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
