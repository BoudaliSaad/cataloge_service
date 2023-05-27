<?php

namespace App\Filament\Resources\UtilisateurResource\Widgets;

use App\Models\Categorie;
use App\Models\Fournisseurs;
use App\Models\Produit;
use App\Models\Utilisateur;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UtilisateurStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('tout les utilisateurs', Utilisateur::all()->count())
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
            Card::make('tout les fournisseurs', Fournisseurs::all()->count())->color('danger'),

            Card::make('tout les Categories', Categorie::all()->count()),
            Card::make('tout les produit', Produit::all()->count()),

            
        ];
    }
}
