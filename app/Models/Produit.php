<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\models\Achat;

use app\models\Categorie;

class Produit extends Model
{
    use HasFactory;
 
    protected $fillable =[
        'nom','barcode','prix','categorie_id'
    ];
    public function categorie(){
        return $this->hasMany(Categorie::class,foreignKey:'categorie_id');
    }
    public function achat(){
        return $this->belongsTo(Achat::class);
    }
}
