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

    // ユーザーidを取得
    public function getUserid()
    {
        return optional($this->userid)->userid;
    }

    public function userid()
    {
        return $this->belongsTo('App\Models\User');
    }

    // ショップidを取得
    public function getShopid()
    {
        return optional($this->shopid)->shopid;
    }

    public function shopid()
    {
        return $this->belongsTo('App\Models\Shop');
    }
}
