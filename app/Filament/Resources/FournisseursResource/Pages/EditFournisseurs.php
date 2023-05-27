<?php

namespace App\Filament\Resources\FournisseursResource\Pages;

use App\Filament\Resources\FournisseursResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFournisseurs extends EditRecord
{
    protected static string $resource = FournisseursResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
