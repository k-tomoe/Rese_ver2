@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__from">
    <div class="thanks__message">会員登録ありがとうございます
    </div>
    <div class="login__button">
        <input type="button" class="login__button-submit" onclick="location.href='/login'" value="ログインする" />
    </div>
</div>
@endsection