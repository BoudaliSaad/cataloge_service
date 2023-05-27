<?php

namespace App\Filament\Resources\FournisseursResource\Pages;

use App\Filament\Resources\FournisseursResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFournisseurs extends ListRecords
{
    protected static string $resource = FournisseursResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
