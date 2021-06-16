<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProgramStudy extends Model
{
    //
    use Notifiable;

    protected $fillable = [
        'id_campus','id_fakultas','nama','akreditasi','deskripsi'
    ];
}
