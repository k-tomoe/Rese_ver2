<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Region;
use App\Models\Genre;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }
}
