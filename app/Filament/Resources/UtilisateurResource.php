<?php

namespace App\Filament\Resources;
use App\Filament\Resources\UtilisateurResource\Pages;
use App\Filament\Resources\UtilisateurResource\RelationManagers;
use App\Models\Utilisateur;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
 use app\Filament\Resources\UtilisateurResource\Widgets\UtilisateurStatsOverview;
 use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
class UtilisateurResource extends Resource
{
    protected static ?string $model = Utilisateur::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')->required(),
                Forms\Components\TextInput::make('prenom')->required(),
                Select::make('role')
                ->options([
                    'devloper' => 'devloper',
                    'ingenieur' => 'ingenieur',
                    'comptable' => 'comptable',
                ])->searchable()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')->searchable(),
                TextColumn::make('prenom'),
                TextColumn::make('role')
                

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make()
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getWidgets(): array
    {
        return [
            UtilisateurStatsOverview::class,
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUtilisateurs::route('/'),
            'create' => Pages\CreateUtilisateur::route('/create'),
            'edit' => Pages\EditUtilisateur::route('/{record}/edit'),
        ];
    }    
}
