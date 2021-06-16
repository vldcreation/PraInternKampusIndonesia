<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CampusLocation extends Model
{
    //
    use Notifiable;

    protected $fillable = [
        'name'
    ];
}
