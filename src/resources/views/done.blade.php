@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="thanks__from">
    <div class="thanks__message">ご予約ありがとうございます
    </div>
    <div class="login__button">
        <input type="button" class="login__button-submit" onclick="location.href='/my_page'" value="戻る" />
    </div>
</div>
@endsection