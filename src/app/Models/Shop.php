<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = array('id');
    
    // 地域を取得
    public function getRegion(){
        return '#' . optional($this->region)->region;
    }

    public function region(){
        return $this->belongsTo('App\Models\Region');
    }

    // ジャンルを取得
    public function getGenre(){
        return '#' . optional($this->genre)->genre;
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }

}
