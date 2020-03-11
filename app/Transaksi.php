<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey = 'transaksi_id';
    protected $fillable = [
        'akun_id',
        'tanggal',
        'kategori_id',
        'subkategori_id',
        'tag_id',
        'nominal',
        'keterangan',
        'user_id'
    ];
}
