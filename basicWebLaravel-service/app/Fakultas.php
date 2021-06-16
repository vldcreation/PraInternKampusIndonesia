<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Fakultas extends Model
{
    //
    use Notifiable;

    protected $fillable = [
        'id_campus','nama_fakultas'
    ];
}
