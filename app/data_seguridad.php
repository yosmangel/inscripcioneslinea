<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_seguridad extends Model
{
    protected $fillable = [
        'ip','navegador','version','os',
    ];

}
