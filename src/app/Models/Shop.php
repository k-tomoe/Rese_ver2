<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    // 地域を取得
    public function region(){
        return 'ID' . $this->region;
    }

    // ジャンルを取得
    public function genre(){
        return 'ID' . $this->genre;
    }

}
