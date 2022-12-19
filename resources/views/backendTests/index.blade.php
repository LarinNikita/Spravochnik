@extends('backendTests/layouts/layout')
@section('content')
    <div>
        @if(count($users))
            <table class="table">
                <th>@sortablelink('#')</th>
                <th>@sortablelink('FIO')</th>
                <th>@sortablelink('account')</th>
                <th>@sortablelink('ipPhone')</th>
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

