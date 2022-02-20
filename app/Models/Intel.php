<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intel extends Model
{
    use HasFactory;

    protected $table = 'intel';

    protected $fillable =
    [
        'i_tipe_processor',
        'i_tipe_socket',
        'i_deskripsi',
        'i_harga',
    ];
}
