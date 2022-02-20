<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;

    protected $table = 'processor';

    protected $fillable =
    [
        'nama_brand',
        'socket',
        'tipe_processor',
        'harga',
    ];
}
