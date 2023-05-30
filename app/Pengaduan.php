<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = [
        'id_user', 'id_petugas', 'judul_pengaduan', 'pengaduan', 'foto', 'status'
    ];
    protected $table = 'pengaduan';
}