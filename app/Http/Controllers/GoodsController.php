<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $goods = Goods::paginate(15);

//        return view('goods.list', compact('goods'));
        return response()->json($goods);

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
        $data = $request->validate(['name'=>'required','code'=>'required']);
        $good = new Goods();

        $good->name = $request->name;
        $good->code = $request->code;
        $good->remains = 1;

        if ($request->hasFile('file')) {
            // Сохранение изображения
            $path = $request->file('file')->store('goods_images', 'public');
            $good->image = $path;
        }

        $good->save();

        return back()->with('success','Товар доставлен успешно');
    }

    public function showState()
    {
        $goods = Goods::with('machine')->paginate(10);

//        dd($goods);
        return response()->json($goods);
    }

    /**
     * Display the specified resource.
     */
    public function show(Goods $goods, $id)
    {
        //
        $good = Goods::find($id);

        return response()->json(['good'=>$good]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goods $goods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Находим товар по ID
        $good = Goods::find($id);

        // Валидируем данные, изображение теперь не обязательно
        $data = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:10240' // Указываем допустимые типы и максимальный размер
        ]);

        // Проверяем, есть ли файл изображения и если он валиден
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Сохраняем изображение и получаем путь
            $path = $request->file('image')->store('/goods_images', 'public');
            // Обновляем путь к изображению
            $good->image = asset($path);
        }

        // Обновляем другие данные товара
        $good->name = $data['name'];
        $good->code = $data['code'];

        // Сохраняем изменения в базе данных
        $good->save();

        // Возвращаем успешный ответ
        return response()->json(['message' => 'Product updated successfully'], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $goods = Goods::find($id);

        $goods->delete();

        $goods->update();

        return response()->json($goods);
    }
}
