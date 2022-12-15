<?php

namespace App\Filament\Resources\ServersResource\Pages;

use App\Filament\Resources\ServersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServers extends ListRecords
{
    protected static string $resource = ServersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
