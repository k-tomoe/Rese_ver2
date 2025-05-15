<?php

namespace App\Http\Controllers;

use App\Models\Shop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\User;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }

    // お気に入りの追加
    public function create($id)
    {
        $shop = Shop::find($id);
        $isLiked = Favorite::where('shop_id', $shop->id)->exists();

        $form = [
            'user_id' => Auth::id(),
            'shop_id' => $shop->id,
        ];

        if ($isLiked) {
            User::first()->shops()->detach(1);
        } else {
            User::first()->shops()->attach(1);
        }

        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }
}
