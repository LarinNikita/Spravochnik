@extends('backendTests/layouts/layout')
@section('content')
<div>
    @foreach($users as $user)
        <div>{{$user->FIO}}</div>
    @endforeach
</div>
@endsection

