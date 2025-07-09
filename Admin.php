<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_admin'; // Specify the primary key
    protected $fillable = [
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}