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

<nav class="navbar navbar-light bg-light">
    <form method="get" action="{{route('find')}}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Варианты</label>
            <select class="form-control" id="exampleFormControlSelect1" name="key">
                <option value="FIO">По ФИО</option>
                <option value="officeNumber">По кабинету</option>
                <option value="ipPhone">По телефону</option>
                <option value="account">По учётной записи</option>
            </select>
        </div>

        <input type="search" placeholder="Search" aria-label="Search" name="param">
        <button type="submit">Search</button>
    </form>
</nav>

<a href="{{route('users.create')}}">Добавить сотрудника</a>
<a href="{{route('logout')}}">Выйти</a>

    @yield('content')
<br>
<div>
    @foreach($departments as $department)
        <a href="{{route('getUsersByDep', $department->id)}}">{{$department->title}}</a>
        <br>
    @endforeach
</div>

</body>
</html>
