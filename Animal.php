<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_animal'; // Specify the primary key
    protected $fillable = [
        'type_animal',
        'prix_par_heure',
    ];

    /**
     * Get the reservations for the animal.
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_animal', 'id_animal');
    }
}