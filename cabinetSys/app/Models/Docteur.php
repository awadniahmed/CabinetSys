<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Docteur extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected  $table = 'docteurs';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'email',
        'password',
        'phone',
        'etat',
    ];

}
