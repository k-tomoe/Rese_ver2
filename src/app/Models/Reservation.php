<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');

    use HasFactory;
    protected $fillable = ['user_id','shop_id','datetime', 'number'];

    protected $casts = [
        'datetime' => 'datetime:YYYY年MM月DD日',
    ];

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

    // ショップネームを取得
    public function getShopname()
    {
        return optional($this->shopname)->shopname;
    }

    public function shopname()
    {
        return $this->belongsTo('App\Models\Shop');
    }

}
