<?php

namespace App\Filament\Resources\DataFEResource\Pages;

use App\Filament\Resources\DataFEResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataFES extends ListRecords
{
    protected static string $resource = DataFEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
