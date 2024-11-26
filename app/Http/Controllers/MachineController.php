<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Goods;
use App\Models\Machine;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
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
    public function show($id)
    {
        //
        $machine = Machine::find($id);

        return response()->json($machine);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        //
    }

    public function showState()
    {
        $machines = Machine::paginate(10);


        return response()->json($machines);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $machine = Machine::find($id);

        $request->validate(['number'=>'required|int','address'=>'required|string','name'=>'required|string','balance'=>'nullable|numeric']);
        $machine->number = $request->number;
        $machine->address = $request->address;
        $machine->name = $request->name;
        $machine->balance = $request->balance;

        $machine->update();

        return response()->json(['message'=>'Информация успешно обновлена','data'=>$machine]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function getEvents($id)
    {
        // Получаем все события для указанного machine_id
        $events = Events::where('machine_id', $id)->get();

        // Возвращаем результат в формате JSON
        return response()->json(['events' => $events, 'id' => $id]);
    }

    public function getSales($id)
    {
        $machineId = $id;
        $machineSales = Sales::where('machine_id', '=', $machineId )->get();

        return response()->json(['sales'=>$machineSales]);
    }

    public function getSoldGoods($id)
    {
        $machineId = $id;
        $soldGoods = Goods::where('machine_id', '=', $machineId)->get();

        return response()->json(['goods'=>$soldGoods]);
    }

    public function attachPost(Request $request)
    {
        $controllerId = $request->input('controller_id');
        $sessionId = $request->input('session_id');
        if (!$controllerId) {
            return response()->json(['error' => 'Не указан controller_id'], 400);
        }
        if (!$sessionId){
            return response()->json(['error' => 'Не указан session_id'], 400);
        }

        $machine = Machine::where(['controller_id','=', $controllerId],['session_id','=', $sessionId])->first();

        if (!$machine) {
            return response()->json(['error' => 'Машина с указанным controller_id не найдена'], 404);
        }

        // Получение ID аутентифицированного пользователя
        $userId = Auth::id();

        $machine->user_id = $userId;
        $machine->save();

        return response()->json(['data' => $request->all(), 'message' => 'Автомат успешно привязан']);
    }


    public function attach()
    {
        return view('machine.attach');
    }
}
