<?php

namespace App\Http\Controllers\additional;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class Tests extends Controller
{
    public function getCsrf()
    {
        return csrf_token();
    }

    public function search()
    {
        return view('backendTests/search');
    }

    public function find(Request $request)
    {
        $departments = Department::all();

        $users = User::where($request->key, 'LIKE', "%{$request->param}%")->orderBy('id')->get();
        return view('backendTests/index', compact('users', 'departments'));
    }
}
