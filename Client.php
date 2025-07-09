<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_client';
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'Nationality', 
        'nambre_of_people',
        'gender',
    ];

    
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_client', 'id_client');
    }
}