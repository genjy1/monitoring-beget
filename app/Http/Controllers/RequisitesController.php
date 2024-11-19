<?php

namespace App\Http\Controllers;

use App\Models\Requisites;
use Illuminate\Http\Request;
use App\Http\Requests\RequisitesRequest;
class RequisitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $requisites = Requisites::where('user_id',$id)->get();

        return response()->json($requisites);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(RequisitesRequest $request)
    {
        //
        $data = $request->validated();
        $requisite = Requisites::create($data);

        return response()->json(['message'=>'Реквизиты успешно добавлены']);
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
    public function show(Requisites $requisites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requisites $requisites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requisites $requisites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requisites $requisites)
    {
        //
    }
}
