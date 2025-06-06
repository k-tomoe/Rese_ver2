<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>



<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <div class="heder__wrapper">

                    <div>
                        <button class="header__menu" onclick="return confirm_test()">
                    </div>
                    <script>
                        function confirm_test() { // メニューの画像をクリックした時
                            document.getElementById('popup').style.display = 'block';
                            return false;
                        }

                        function nofunc() { // 閉じるをクリックした場合
                            document.getElementById('popup').style.display = 'none';
                        }
                    </script>

                    <div>
                        <a class="header__logo" href="/">
                            Rese
                        </a>
                    </div>

                    <!-- ここに検索機能（インデックスページの時のみ） -->



                </div>
            </div>
    </header>

    <main>
        <div id="popup" class="popup">
            <div class="popup__close">
                <button class="popup__close" id="no" onclick="nofunc()"></button><br />
            </div>

            <nav class="menu__wrapper">
                <ul class="popup__menu">
                    @if (Auth::check())
                    <li class="menu__item">
                        <a class="header-nav__link" href="/">Home</a>
                    </li>
                    <li class="menu__item">
                        <form class="form" action="/logout" method="post">
                            @csrf
                            <button class="header-nav__button">Logout</button>
                        </form>
                    </li>
                    <li class="menu__item">
                        <a class="header-nav__link" href="/my_page">Mypage</a>
                    </li>
                    @else
                    <li class="menu__item">
                        <a class="header-nav__link" href="/">Home</a>
                    </li>
                    <li class="menu__item">
                        <a class="header-nav__link" href="/register">Registration</a>
                    </li>
                    <li class="menu__item">
                        <a class="header-nav__link" href="/login">Login</a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
        @yield('content')
    </main>
</body>

</html>