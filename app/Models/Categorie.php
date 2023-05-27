<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Produit;
class Categorie extends Model
{
    use HasFactory;
    protected $fillable=[
        'categorie'
    ];
   
    public function produit(){
        return $this->hasOne(Produit::class);
    }
}
