@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register-form">
        <div class="register-form__heading">
            <h2>Registration</h2>
        </div>
        <form class="form" action="/register" method="post">
            @csrf
            <div class="form__group">

                <div class="form__group-content ">
                    <div class="form__input--text username__input">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Username" />
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">

                <div class="form__group-content">
                    <div class="form__input--text email__input">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">

                <div class="form__group-content">
                    <div class="form__input--text password__input">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection