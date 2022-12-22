<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('auth')}}">
    <div class="form-group">
        <label for="exampleInputEmail1">Логин</label>
        <input name="account" value="{{$user->first()->account}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Пароль</label>
        <input name="password" placeholder="Введите пароль">
    </div>
    <button type="submit" class="btn btn-primary">Войти</button>

    <label for="exampleInputEmail1">@error('email') suck @enderror</label>
</form>
</body>
</html>
