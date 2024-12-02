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
    public function create(Request $request, $id)
    {
        $validated = $request->validate([
            'requisites.organization.name' => 'required|string',
            'requisites.organization.inn' => 'required|string|max:12',
            'requisites.organization.address' => 'required|string',
            'requisites.organization.payment_account' => 'required|string',
            'requisites.bank.bic' => 'required|string|max:9',
            'requisites.bank.name' => 'required|string',
            'requisites.bank.correspondent_account' => 'required|string',
            'requisites.bank.address' => 'required|string',
        ]);

        $requisite = new Requisites();
        $requisite->user_id = $id;
        $requisite->requisites = json_encode($validated);
        $requisite->save();

        return response()->json(['message' => 'Реквизиты успешно добавлены']);
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
