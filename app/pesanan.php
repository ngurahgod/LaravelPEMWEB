<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    public function user()
    {
        return $this->belongsTo('app\user','user_id','id');
    }

    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail','pesanan_id','id');
    }
    //
}
