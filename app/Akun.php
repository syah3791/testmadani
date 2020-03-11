<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $primaryKey = 'akun_id';
    protected $fillable = [
        'nama',
        'jenis'
    ];
}
