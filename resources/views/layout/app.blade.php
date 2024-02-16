<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/reset.css">
    <link rel="stylesheet" href="/common.css">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    {{-- ナビゲーション --}}
    <div class="header">
        <div class="logo">
            <p>School Cafeteria</p>
        </div>
        <ul>
            <li><a href="{{ route('home') }}">TOP</a></li>
            <li><a href="{{ route('categories') }}">メニュー検索</a></li>
            <li><a href="{{ route("create") }}">メニュー追加</a></li>
            <li><a href="{{ route('login') }}">ログイン</a></li>
            <li><a href="{{ route('register') }}">新規登録</a></li>
            <li><a href=""><img src="/cart_mark.svg" alt="cart_mark"></a></li>
        </ul>
    </div>
    {{-- 本文 --}}
    <div class="content">
        @yield('content')
    </div>
</body>
</html>