<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_du_brief',
        'Date_heure_livraison',
        'Date_heure_recuperation',
    ];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function apprenant() {
        return $this->belongsToMany(Apprenant::class);
    }
}
