@extends('layout.app')
@section('content')
<div class="container">
    <h1>会員登録</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf 
        <div class="form-item">
            <input type="text" name="name" value="{{ old('name') }}" placeholder="名前">
        </div>
        <div class="form-item">
            <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
        </div>
        <div class="form-item">
            <input type="password" name="password" placeholder="パスワード">
        </div>
        <div class="form-item">
            <input type="password" name="password_confirmation" placeholder="パスワード再入力">
        </div>
        <div class="button-panel">
            <input type="submit" title="Register" value="Register">
        </div>
    </form>
</div>
@endsection