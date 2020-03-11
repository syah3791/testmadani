<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    protected $primaryKey = 'subkategori_id';
    protected $fillable = [
    	'kategori_id',
        'nama'
    ];
}
