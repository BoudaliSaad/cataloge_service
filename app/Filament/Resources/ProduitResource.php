<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProduitResource\Pages;
use App\Filament\Resources\ProduitResource\RelationManagers;
use App\Models\Categorie ;
use App\Models\Produit;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use  Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
class ProduitResource extends Resource
{
    protected static ?string $model = Produit::class;
   
    // protected static ?string $var = Categorie::all();
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                TextInput::make('nom')->required(),
                TextInput::make('barcode')->length(5)->required(),
                TextInput::make('prix')->required(),
                Select::make('categorie_id')
                ->label('categorie')
                ->options(Categorie::all()->pluck('categorie','id'))->required()
                
             
            ])
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')->searchable(),
                TextColumn::make('barcode'),
               TextColumn::make('prix'),
               TextColumn::make('categorie_id')

              

              
            ])
            ->filters([
                
            ])
            ->actions([
              
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
      
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduits::route('/'),
            'create' => Pages\CreateProduit::route('/create'),
            'edit' => Pages\EditProduit::route('/{record}/edit'),
        ];
    }    
}
