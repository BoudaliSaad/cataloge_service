<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Achat;
class Fournisseurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom', // <-- add your new column here
        'prenom',
        'telephone',
        // other columns you want to allow mass assignment of
    ];
    public function achat(){
        return $this->hasMany(Achat::class);
    }
}
