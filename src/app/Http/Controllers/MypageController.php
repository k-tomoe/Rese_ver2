<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;

class MypageController extends Controller
{
    public function index()
    {

        $reservations = Reservation::where('user_id', '=', Auth::id())->get();

        $favoritesshopid = Favorite::where('user_id', Auth::id())->get('shop_id');

        $favorites = Shop::find($favoritesshopid);
        
        return view('my_page', ['reservations' => $reservations], ['favorites' => $favorites]);
    }
}
