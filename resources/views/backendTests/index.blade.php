@extends('backendTests/layouts/layout')
@section('content')
    <div>
        @if(count($users))
            <table class="table">
                <th scope="col">#</th>
                <th scope="col">FIO</th>
                <th scope="col">account</th>
                <th scope="col">ipPhone</th>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->FIO}}</td>
                        <td>{{$user->account}}</td>
                        <td>{{$user->ipPhone}}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <div>NO DATA</div>
        @endif
    </div>
@endsection

