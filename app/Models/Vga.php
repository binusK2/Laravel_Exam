<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vga extends Model
{
    use HasFactory;
    protected $table = 'vga';

    protected $fillable = [
        'merk',
        'nama',
        'deskripsi',
        'harga'
    ];
}
