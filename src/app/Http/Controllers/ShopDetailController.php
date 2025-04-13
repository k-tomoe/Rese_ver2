<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ShopDetailController extends Controller
{
    public function index($id)
    {
        $shop = Shop::find($id);
        return view('shop_detail', ['shop' => $shop]);
    }

    // 予約データの追加
    public function create(Request $request)
    {
        $date = $request->date;
        $time = $request->time;
        $array = array($date, $time);
        $datetime = implode(" ", $array);
        $form = [
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_id,
            'datetime' => $datetime,
            // 連想配列で日付と時刻を組み合わせる
            'number' => $request->number,
        ];
        Reservation::create($form);
        return view('done');
    }

}
