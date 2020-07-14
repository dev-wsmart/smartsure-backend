<?php

namespace App\Http\Controllers;

use App\homeContent1;
use Illuminate\Http\Request;

class HomeContent1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.content1.content');
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
     * @param  \App\homeContent1  $homeContent1
     * @return \Illuminate\Http\Response
     */
    public function show(homeContent1 $homeContent1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\homeContent1  $homeContent1
     * @return \Illuminate\Http\Response
     */
    public function edit(homeContent1 $homeContent1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\homeContent1  $homeContent1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, homeContent1 $homeContent1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\homeContent1  $homeContent1
     * @return \Illuminate\Http\Response
     */
    public function destroy(homeContent1 $homeContent1)
    {
        //
    }
}
