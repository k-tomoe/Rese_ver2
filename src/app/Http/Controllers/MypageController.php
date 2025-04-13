<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class MypageController extends Controller
{
    public function index()
    {
        $reservations = Reservation::where('user_id', '=', Auth::id())->get();
        


        return view('my_page', ['reservations' => $reservations]);
    }
}
