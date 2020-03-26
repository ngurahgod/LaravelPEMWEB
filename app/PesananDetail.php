<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function barang()
    {
        return $this->belongsTo('app\barang','barang_id','id');
    }
    public function pesanan()
    {
        return $this->belongsTo('App\PesananDetail','pesanan_id')
    }
    //
}
