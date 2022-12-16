@extends('backendTests/layouts/layout')
@section('content')
<div>
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">ФИО</label>
            <input name="FIO" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Логин</label>
            <input name="account" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Пароль</label>
            <input name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-check form-check-inline">
            <input name="isChief" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" {{old('isChief') ? 'checked="checked"' : ''}}>
            <label class="form-check-label" for="inlineCheckbox1">Начальник</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Отдел</label>
            <select class="form-control" id="exampleFormControlSelect1" name="department_id">
                @foreach($departments as $department)
                    <option value="{{$department->id}}">{{$department->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

