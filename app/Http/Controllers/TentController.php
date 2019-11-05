<?php

namespace App\Http\Controllers;

use App\tent;
use Illuminate\Http\Request;

class TentController extends Controller
{    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\tent  $tent
     * @return \Illuminate\Http\Response
     */
    public function show(tent $tent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tent  $tent
     * @return \Illuminate\Http\Response
     */
    public function edit(tent $tent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tent  $tent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tent $tent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tent  $tent
     * @return \Illuminate\Http\Response
     */
    public function destroy(tent $tent)
    {
        //
    }
}
