<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FournisseursResource\Pages;
use App\Filament\Resources\FournisseursResource\RelationManagers;
use App\Models\Fournisseurs;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use filament\forms\Components\Field;
use Filament\Tables\Columns\TextColumn;
use  Filament\Forms\Components\TextInput;
class FournisseursResource extends Resource
{
    protected static ?string $model = Fournisseurs::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
 
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')->required(),
                Forms\Components\TextInput::make('prenom')->required(),
                TextInput::make('telephone')->tel()->telRegex('/^[+]*[(]{0,1}[0-9]{0,10}[)]{0,1}[-\s\.\/0-9]*$/')
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')->searchable(),
                TextColumn::make('prenom'),
               TextColumn::make('telephone')
            ])
            ->filters([
                

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
            'index' => Pages\ListFournisseurs::route('/'),
            'create' => Pages\CreateFournisseurs::route('/create'),
            'edit' => Pages\EditFournisseurs::route('/{record}/edit'),
        ];
    }    
}
