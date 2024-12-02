<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandlerController extends Controller
{
    //
    public function handle()
    {
        $requestPort = request()->getPort();
        $dataArray = ['url'=>url()->full(), 'port'=>$requestPort];

        if ($requestPort === 8000){
            return redirect()->route('handler.test');
        }else{
            return response()->json($requestPort);
        }
    }

    public function test()
    {
        return response()->json('test');
    }
}
