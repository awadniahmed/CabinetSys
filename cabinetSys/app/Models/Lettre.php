<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lettre extends Model
{
    use HasFactory;
    protected  $table = 'lettres';
    protected $fillable = [
        'id',
        'destignation',
        'description',
        'date',
        'docteur',
        'patient',
    ];
}
