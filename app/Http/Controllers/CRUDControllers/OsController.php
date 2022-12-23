<?php

namespace App\Http\Controllers\CRUDControllers;

use App\Http\Controllers\Controller;
use App\Models\Os;
use function dd;
use function redirect;
use function request;

class OsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oss = Os::all();
        dd($oss);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'title' => '',
            'image' => ''
        ]);

        Os::create($data);
        dd('69c');
        redirect()->route();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Os $oss)
    {
        $data = request()->validate([
            'title' => '',
            'image' => ''
        ]);

        $oss->update($data);
        dd('69u');
        redirect()->route();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Os $oss)
    {
        $oss->delete($oss);
        dd('69d');
        redirect()->route();
    }
}
