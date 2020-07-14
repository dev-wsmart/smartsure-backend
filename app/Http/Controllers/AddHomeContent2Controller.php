<?php

namespace App\Http\Controllers;

use App\addHomeContent2;
use Illuminate\Http\Request;

class AddHomeContent2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.content2.addcontent');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\addHomeContent2  $addHomeContent2
     * @return \Illuminate\Http\Response
     */
    public function show(addHomeContent2 $addHomeContent2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addHomeContent2  $addHomeContent2
     * @return \Illuminate\Http\Response
     */
    public function edit(addHomeContent2 $addHomeContent2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\addHomeContent2  $addHomeContent2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addHomeContent2 $addHomeContent2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\addHomeContent2  $addHomeContent2
     * @return \Illuminate\Http\Response
     */
    public function destroy(addHomeContent2 $addHomeContent2)
    {
        //
    }
}
