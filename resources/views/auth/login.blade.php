<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="container">
        <h1>ログイン</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf 
            <div class="form-item">
                <input type="email" name="email"  placeholder="Email Address" value="{{ old('email') }}"></input>
            </div>
            <div class="form-item">
                <input type="password" name="password" placeholder="Password"></input>
            </div>
            <div class="button-panel">
                <input type="submit" title="Login" value="Login"></input>
            </div>
        </form>
    </div>
</body>
</html>