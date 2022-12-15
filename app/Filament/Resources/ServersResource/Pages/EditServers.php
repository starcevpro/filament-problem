<?php

namespace App\Filament\Resources\ServersResource\Pages;

use App\Filament\Resources\ServersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServers extends EditRecord
{
    protected static string $resource = ServersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
