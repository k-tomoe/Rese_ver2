@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="shops-list">
    @foreach ($shops as $shop)
    <div class="card">
        <div class="img__wrapper">
            <img class="card__img" src="{{ asset('img/'.$shop->shopimg) }}" alt="{{ $shop->shopimg}}">
        </div>
        <div class="card__content">
            <div class="shopname">{{$shop->shopname}}</div>

            <div class="card__content__list">
                <p>{{$shop->getRegion()}}</p>
                <p>{{$shop->getGenre()}}</p>
            </div>
            <div class="card_action">
                <input type=" button" class="overview_button" onclick="location.href='<?php echo route('shop_detail', ['id' => $shop->id]) ?>' " value="詳しくみる" />

                <input type=" button" class="favorite_button" onclick="location.href='<?php echo route('shop_favorite', ['id' => $shop->id]) ?>' " />

                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection