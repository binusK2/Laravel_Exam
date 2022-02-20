<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilihanuser extends Model
{
    use HasFactory;

    protected $table = 'pilihanuser';

    protected $fillable = [
        'processor',
        'motherboard',
        'vga',
        'ram',
        'power',
        'user',

    ];
}
