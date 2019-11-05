<?php

namespace App\Http\Controllers;

use App\recharge;
use Illuminate\Http\Request;

class RechargeController extends Controller
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
     * @param  \App\recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function show(recharge $recharge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function edit(recharge $recharge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recharge $recharge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function destroy(recharge $recharge)
    {
        //
    }
}
