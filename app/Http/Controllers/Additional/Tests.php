<?php

namespace App\Http\Controllers\additional;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Post;
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
        $request->validate([
           'param' => 'required',
        ]);

        $departments = Department::all();

        $users = User::sortable()->where($request->key, 'LIKE', "%{$request->param}%")->orderBy('id')->get();
        return view('backendTests/index', compact('users', 'departments'));
    }

    public function getUsersByDep($departmentId)
    {
        $departments = Department::all();

        $ferstQ = Department::find($departmentId);
        $ferstQ = $ferstQ->users;

        $ids = [];

        foreach($ferstQ as $item){
            array_push($ids, $item->id);
        }

        $users = User::sortable()->findMany($ids, $columns = ['*']);
        //dd($users);
        return view('backendTests/index', compact('departments','users'));
    }
}
