<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    //
    protected $table = 'laporan_kerusakan_jalan';

    protected $fillable=[
        'longitude',
        'latitude',
        'status',
        'keterangan',
        'alamat',
        'level',
        'foto1',
        'foto2',
        'foto3',
        'id_users'
    ];

}

