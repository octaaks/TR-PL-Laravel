<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['nama_item','jumlah','harga'];
    
    public function user(){
        return $this -> belongsTo('App\User');
    }
}
