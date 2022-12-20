<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;
    protected $fillable=[

        'nom',
        'prenom',
        'objet',
        'nEntreprise',
        'statue',
        'user_id'

    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
