<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentars';
    protected $fillable = [
        'id_postingan',
        'email',
        'nama_user',
        'isi_komentar',
    ];
}
