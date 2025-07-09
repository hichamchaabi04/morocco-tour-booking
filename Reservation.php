<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_reservation'; // Specify the primary key
    protected $fillable = [
        'id_client',
        'id_animal',
        'date_heure_reservation',
        'prix_total',
    ];

    /**
     * Get the client that owns the reservation.
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client', 'id_client');
    }

    /**
     * Get the animal that is part of the reservation.
     */
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'id_animal', 'id_animal');
    }
}