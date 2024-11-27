<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    //
    public function getPositions($id)
    {
        $positions = Position::where('machine_id',$id);

        return response()->json($positions);
    }

    public function setPositions()
    {

    }

}
