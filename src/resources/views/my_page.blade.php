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

    </div>

</div>

@endsection