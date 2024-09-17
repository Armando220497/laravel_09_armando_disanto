<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationAsk extends Model
{
    use HasFactory;

    // I campi che possono essere riempiti nel database
    protected $fillable = [
        'email',
        'number',
        'name',
        'message',
        'img',
    ];
}
