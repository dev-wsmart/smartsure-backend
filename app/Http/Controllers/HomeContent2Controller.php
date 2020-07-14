<?php

namespace App\Http\Controllers;

use App\homeContent2;
use Illuminate\Http\Request;

class HomeContent2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.content2.content');
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
     * @param  \App\homeContent2  $homeContent2
     * @return \Illuminate\Http\Response
     */
    public function show(homeContent2 $homeContent2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\homeContent2  $homeContent2
     * @return \Illuminate\Http\Response
     */
    public function edit(homeContent2 $homeContent2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\homeContent2  $homeContent2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, homeContent2 $homeContent2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\homeContent2  $homeContent2
     * @return \Illuminate\Http\Response
     */
    public function destroy(homeContent2 $homeContent2)
    {
        //
    }
}
