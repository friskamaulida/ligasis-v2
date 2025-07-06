<?php

namespace App\Filament\Resources\TentangSekolahResource\Pages;

use App\Filament\Resources\TentangSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTentangSekolah extends EditRecord
{
    protected static string $resource = TentangSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
