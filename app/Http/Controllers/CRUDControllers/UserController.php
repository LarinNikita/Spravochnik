<?php

namespace App\Http\Controllers\CRUDControllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use function redirect;
use function request;
use function view;

class UserController extends Controller
{
    public function index()
    {
        $users = User::sortable()->get();
        $departments = Department::all();
        return view('backendTests/index', compact('departments'), compact('users'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('backendTests/create', compact('departments'));
    }

    public function store()
    {
        $data = request()->validate([
            'FIO' => '',
            'ip' => '',
            'account' => '',
            'password' => '',
            'isChief' => 'boolean',
            'msOutlookMail' => '',
            'officeNumber' => '',
            'ipPhone' => '',
            'phoneNumber' => '',

            'post_id' => '',
            'status_id' => '',
            'os_id' => '',
            'department_id' => '',
        ]);

        User::Create($data);
        redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $data = request()->validate([
            'FIO' => '',
            'ip' => '',
            'account' => '',
            'password' => '',
            'isChief' => 'boolean',
            'msOutlookMail' => '',
            'officeNumber' => '',
            'ipPhone' => '',
            'phoneNumber' => '',

            'post_id' => '',
            'status_id' => '',
            'os_id' => '',
            'department_id' => '',
        ]);

        $user->update($data);
        redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        redirect()->route('users.index');
    }
}
