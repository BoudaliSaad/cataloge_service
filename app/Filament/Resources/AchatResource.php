<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchatResource\Pages;
use App\Filament\Resources\AchatResource\RelationManagers;
use App\Models\Achat;
use App\Models\Produit;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchatResource extends Resource
{
    protected static ?string $model = Achat::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                Select::make('fournisseur_id')
                ->relationship('fournisseur','nom'),
                Select::make('utitisateurs_id')
                ->relationship('utilisateur','nom'),
                Select::make('produit_id')
                ->options(Produit::all()->pluck('nom','id'))->required(),
                TextInput::make('quantite')->required(),
                DateTimePicker::make('date'),




                ])
                
                
                
                

            ]);
    }

    public static function table(Table $table): Table
    {
       // $prix=Produit::all()->pluck('prix','id');
       
        return $table
            ->columns([
                TextColumn::make('fournisseur.nom')->searchable(),
                TextColumn::make('utilisateur.nom')->searchable(),
                TextColumn::make('produit_id')->searchable(),
                TextColumn::make('quantite'),
                TextColumn::make('date'),


                

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAchats::route('/'),
            'create' => Pages\CreateAchat::route('/create'),
            'edit' => Pages\EditAchat::route('/{record}/edit'),
        ];
    }    
}
