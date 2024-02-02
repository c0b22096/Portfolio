<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    @include('commons.errors')
    <h1>マイページ</h1>
    <p>ようこそ、{{ Auth::user()->name }}さん</p>
    <p><a href="{{ route('articles.index') }}">記事一覧へ</a></p>
    <form action="{{ route('logout') }}" method="post">
        @csrf 
        <button type="submit">ログアウト</button>
    </form>
    @endsection()
</body>
</html>