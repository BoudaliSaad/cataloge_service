<?php

namespace App\Filament\Resources\AchatResource\Pages;

use App\Filament\Resources\AchatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAchat extends EditRecord
{
    protected static string $resource = AchatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
