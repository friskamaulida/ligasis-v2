<?php

namespace App\Filament\Resources\TentangSekolahResource\Pages;

use App\Filament\Resources\TentangSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTentangSekolahs extends ListRecords
{
    protected static string $resource = TentangSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
