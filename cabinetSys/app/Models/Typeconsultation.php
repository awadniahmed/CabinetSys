<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeconsultation extends Model
{
    use HasFactory;
    protected  $table = 'typeconsultations';
    protected $fillable = [
        'id',
        'designation',
    ];
}
