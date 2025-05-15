@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')

<div class="my_page__wrapper">

    <div class="reservation_situation">
        <h3>予約状況</h3>
        @foreach ($reservations as $reservation)
        <table class="reservation__confirmation">
            <tr>
                <th>Shop</th>
                <td>{{$reservation->getUserid()}}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{$reservation->datetime}}</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>{{$reservation->datetime}}</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>{{$reservation->number}}</td>
            </tr>
        </table>
        @endforeach
    </div>

    <div class="favorite_shops">
        <h3>お気に入り店舗</h3>

        @foreach ($favorites as $favorite)
        <div class="card">
            <div class="img__wrapper">
                <img class="card__img" src="{{ asset('img/'.$favorite->shopimg) }}" alt="{{ $favorite->shopimg}}">
            </div>
            <div class="card__content">
                <div class="shopname">{{$favorite->shopname}}</div>

                <div class="card__content__list">
                    <p>{{$favorite->getRegion()}}</p>
                    <p>{{$favorite->getGenre()}}</p>
                </div>
                <div class="card_action">
                    <input type=" button" class="overview_button" onclick="location.href='<?php echo route('shop_detail', ['id' => $favorite->id]) ?>' " value="詳しくみる" />

                    <input type=" button" class="favorite_button" onclick="location.href='<?php echo route('shop_favorite', ['id' => $favorite->id]) ?>' " />

                    </button>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>

@endsection