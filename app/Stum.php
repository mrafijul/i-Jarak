<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stum extends Model
{
    //
    protected $table = 'mobil_stum';

    protected $fillable=[
        'longitude',
        'latitude'
    ];

}
