<?php

namespace App\Filament\Resources\PusatBantuanResource\Pages;

use App\Filament\Resources\PusatBantuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPusatBantuan extends EditRecord
{
    protected static string $resource = PusatBantuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
