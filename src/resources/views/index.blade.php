@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
@foreach ($shops as $shop)
<div class="shops-list">
    <div class="card">
        <div class="card__img">
        </div>
        <div class="card__content">
            <div class="shopname">{{$shop->shopname()}}</div>

            <div class="card__content__list">
                <p>{{$shop->region()}}</p>
                <p>{{$shop->genre()}}</p>
            </div>
            <div class="card_action">
                <button class="overview_button">
                    詳しくみる
                </button>
                <button class="favorite_button">
                </button>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card__img">
        </div>
        <div class="card__content">
            <div class="shopname">仙人</div>

            <div class="card__content__list">
                <p>#東京</p>
                <p>#寿司</p>
            </div>
            <div class="card_action">
                <button class="overview_button">
                    詳しくみる
                </button>
                <button class="favorite_button">

                </button>
            </div>
        </div>
    </div>

</div>
@endforeach
@endsection