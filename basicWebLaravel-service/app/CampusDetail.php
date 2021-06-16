<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CampusDetail extends Model
{
    //
    use Notifiable;
    protected $fillable = [
        'name','akreditasi','jenis','lokasi'
    ];
}
