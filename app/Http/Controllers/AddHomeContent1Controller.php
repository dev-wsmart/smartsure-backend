<?php

namespace App\Http\Controllers;

use App\addHomeContent1;
use Illuminate\Http\Request;

class AddHomeContent1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.content1.addcontent');
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
     * @param  \App\addHomeContent1  $addHomeContent1
     * @return \Illuminate\Http\Response
     */
    public function show(addHomeContent1 $addHomeContent1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addHomeContent1  $addHomeContent1
     * @return \Illuminate\Http\Response
     */
    public function edit(addHomeContent1 $addHomeContent1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\addHomeContent1  $addHomeContent1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addHomeContent1 $addHomeContent1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\addHomeContent1  $addHomeContent1
     * @return \Illuminate\Http\Response
     */
    public function destroy(addHomeContent1 $addHomeContent1)
    {
        //
    }
}
