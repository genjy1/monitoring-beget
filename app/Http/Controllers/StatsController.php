<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Stats;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('stats.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function totals()
    {
        $sales = Sales::all();
        return view('stats.totals', compact('sales'));
    }

    public function proceeds()
    {
        $sold = Sales::all();
        return view('stats.proceeds', compact('sold'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Stats $stats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stats $stats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stats $stats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stats $stats)
    {
        //
    }
}
