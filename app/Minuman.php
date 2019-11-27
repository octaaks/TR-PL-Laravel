<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    protected $table = 'minuman';
    protected $fillable = ['kode','nama','harga','gambar'];
}
