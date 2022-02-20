<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ps extends Model
{
    use HasFactory;
    protected $table = 'ps';

    protected $fillable = [
        'merk',
        'nama',
        'deskripsi',
        'harga'
    ];
}
