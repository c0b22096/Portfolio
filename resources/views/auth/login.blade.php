@extends('layout.app')
@section('content')
<div class="container">
    <h1>ログイン</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf 
        <div class="form-item">
            <input type="email" name="email"  placeholder="メールアドレス" value="{{ old('email') }}">
        </div>
        <div class="form-item">
            <input type="password" name="password" placeholder="パスワード">
        </div>
        <div class="button-panel">
            <input type="submit" title="Login" value="LOGIN">
        </div>
    </form>
    <div class="link">
        <a href="{{ route('register') }}">アカウントの新規登録</a>
    </div>
    <div class="link">
        <a href="">パスワードを忘れた方</a>
    </div>
</div>
@endsection