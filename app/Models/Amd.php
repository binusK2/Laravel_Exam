<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amd extends Model
{
    use HasFactory;

    protected $table = 'amd';

    protected $fillable =
    [
        'a_tipe_processor',
        'a_tipe_socket',
        'a_deskripsi',
        'a_harga',
    ];
}
