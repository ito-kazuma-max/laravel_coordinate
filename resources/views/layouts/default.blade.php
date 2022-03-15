<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="d-flex flex-column">
    <header>
        @guest
            <nav class="navbar navbar-expand-sm fixed-top bg-light navbar-light">
                <a href="{{ route('top') }}" class="navbar-brand">Coorde for</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                サインアップ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                ログイン
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        @else
            <nav class="navbar navbar-expand-sm fixed-top bg-light navbar-light">
                <a href="{{ route('top') }}" class="navbar-brand">Coorde for</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav2">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('mypage.index') }}" class="nav-link">
                                マイページ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('items.index') }}" class="nav-link">
                                アイテム一覧
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('coordinates.index', \Auth::user()) }}" class="nav-link">
                                マイコーデ一覧
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" class="nav-link" value="ログアウト">
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        @endguest
    </header>

    <div class="container">

        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach

        @if (\Session::has('success'))
          <div class="success">
              {{ \Session::get('success') }}
          </div>
        @endif

        @yield('content')

    </div>
    <footer class="mt-auto text-center bg-dark texst-light">
        ©︎KAZUMA ITO
    </footer>
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/js-app.js') }}"></script>
</body>
</html>
