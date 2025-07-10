<?php

namespace App\Filament\Resources\DataFEResource\Pages;

use App\Filament\Resources\DataFEResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataFE extends EditRecord
{
    protected static string $resource = DataFEResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
