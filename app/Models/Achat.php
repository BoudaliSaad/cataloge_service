<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Utilisateur;
use App\Models\Fournisseurs;
use App\Models\Produit;
class Achat extends Model
{
    use HasFactory;
    protected $fillable=[
       'utilisateur_id' ,'fournisseur_id','produit','quantite','total','date'
    ];
    protected $guarded = [];
    public function utilisateur(){
        return $this->belongsTo(Utilisateur::class);
    }
    public function fournisseur(){
        return $this->belongsTo(Fournisseurs::class);
    }
    public function produit()
    {
        return $this->hasMany(Produit::class);
    }
}
