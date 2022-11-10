<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'id_promotion'
    ];
    public function promotion() {
        return $this->belongsTo(Promotion::class);
    }

    public function brief() {
        return $this->belongsToMany(Brief::class);
    }
}
