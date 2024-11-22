<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class SettingsController extends Controller
{
    //
    public function getSettings(Request $request, $id)
    {
        $machine_id = $id;
        $settings = Settings::where('machine_id','=',$machine_id)->pluck('settings')->first();

        if (!$machine_id) {
            return response()->json(['error' => 'Machine ID is required']);
        }

        if (!$settings) {
            return response()->json(['error' => 'Settings not found']);
        }

        $decodedSettings = json_decode($settings);

        return response()->json(['settings' => $decodedSettings]);
    }

    public function setSettings(Request $request, $id)
    {
        $settings = $request->all();


        try {
            Settings::create(['machine_id'=>$id,'settings'=>json_encode($settings)]);

            return response()->json(['message' => 'All good']);
        } catch (\Exception $error) {
            return response()->json(['data' => $settings, 'error' => $error->getMessage()]);
        }
    }


    public function updateSettings(Request $request, $id)
    {
        // Получаем данные для обновления
        $settingsData = $request->input('settings');

        // Проверяем, существует ли запись
        $settings = Settings::where('machine_id','=',$id)->first();

//        if (!$settings) {
//            // Если запись не найдена, создаём новую
//            $settings = new Settings();
//            $settings->machine_id = $id;
//        }

        // Обновляем настройки
        $settings->settings = json_encode($settingsData); // Сериализуем данные для сохранения
        $settings->save();

        // Возвращаем ответ
        return response()->json([
            'message' => 'Настройки успешно обновлены',
            'settings' => json_decode($settings->settings) // Возвращаем настройки в читаемом формате
        ]);
    }
}
