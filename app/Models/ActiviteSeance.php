<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiviteSeance extends Model
{
    use HasFactory;

    /**
     * Nom explicite de la table (obligatoire ici)
     */
    protected $table = 'activite_seance';

    /**
     * Champs assignables en masse
     */
    protected $fillable = [
        'activite_id',
        'seance_id',
        'quantity',
        'difficulty',
        'poids',
    ];

    /**
     * Relation : appartient à une activité
     */
    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }

    /**
     * Relation : appartient à une séance
     */
    public function seance()
    {
        return $this->belongsTo(Seance::class);
    }
}
