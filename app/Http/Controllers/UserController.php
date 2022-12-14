<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $departments = Department::all();
        return view('backendTests/index', compact('departments'), compact('users'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('backendTests/create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'FIO' => '',
            'account' => '',
            'password' => '',
            'isChief' => '',
            'msOutlookMai' => '',
            'officeNumber' => '',
            'ipPhone' => '',
            'phoneNumber' => '',

            'post_id' => '',
            'status_id' => '',
            'os_id' => '',
        ]);

        User::Create($data);
        redirect()->route('users.index'); //затестить в постмене
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
