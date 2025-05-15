<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'shop_id' => 'required',
    );

    // ユーザーidを取得命名規則
    public function getUserid()
    {
        return optional($this->users)->userid;
    }
    // テーブル名
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    // ショップidを取得
    public function getShopid()
    {
        return optional($this->shops)->shopid;
    }

    public function shops()
    {
        return $this->belongsToMany('App\Models\Shop');
    }
}
