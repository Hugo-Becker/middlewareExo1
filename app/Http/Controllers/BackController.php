<?php

namespace App\Http\Controllers;

use App\Models\Back;
use Illuminate\Http\Request;

class BackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.back');
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
     * @param  \App\Models\Back  $back
     * @return \Illuminate\Http\Response
     */
    public function show(Back $back)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Back  $back
     * @return \Illuminate\Http\Response
     */
    public function edit(Back $back)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Back  $back
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Back $back)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Back  $back
     * @return \Illuminate\Http\Response
     */
    public function destroy(Back $back)
    {
        //
    }
}
