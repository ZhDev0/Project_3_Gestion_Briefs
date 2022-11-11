<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom_brief',
        'date_livraison',
        'date_recuperation'
    ];
    public function tache() {
        return $this->hasMany(Tache::class);
    }
}
