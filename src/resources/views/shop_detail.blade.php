@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
@endsection

@section('content')

<div class="shop_detail__wrapper">

    <div class="shop_detail">
        <div class="shopname">{{$shop->shopname}}</div>
        <div class="img__wrapper"><img class="card__img" src="{{ asset('img/'.$shop->shopimg) }}" alt="{{$shop->shopimg}}"></div>
        <div class="shop__content__list">
            <p>{{$shop->getRegion()}}</p>
            <p>{{$shop->getGenre()}}</p>
        </div>
        <div class="overview">{{$shop->overview}}</div>
    </div>

    <div class="reservation">
        <h3>予約</h3>
        <form action="/reservations" method="post">
            @csrf
            <td>
                <input type="date" name="date">
            </td>
            <td>
                <input type="time" name="time">
            </td>
            <td>
                <input type="text" name="number">
            </td>
            <td>
                <input type="hidden" name="shop_id" value="{{$shop->id}}" />
            </td>


            <!-- ジャバスプリクトを使用 -->
            <table class="reservation__confirmation">
                <tr>
                    <th>Shop</th>
                    <td>仙人</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>2021-04-01</td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th>Number</th>
                    <td>1人</td>
                </tr>
            </table>

            <button>予約する</button>

        </form>
    </div>

</div>

@endsection