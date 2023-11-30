<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;
    protected  $table = 'observations';
    protected $fillable = [
        'id',
        'note',
        'docteur',
        'patient',
        'date_ad',
    ];
}
