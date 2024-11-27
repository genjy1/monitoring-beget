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
        $bills = Settings::where('machine_id','=',$machine_id)->pluck('bills')->first();

        if (!$machine_id) {
            return response()->json(['error' => 'Machine ID is required']);
        }

        if (!$settings) {
            return response()->json(['error' => 'Settings not found']);
        }



        return response()->json(['settings' => json_decode($settings), 'bills'=>json_decode($bills)]);
    }

    public function setSettings(Request $request, $id)
    {
        $settings = $request->all();


        try {
               $newSettings = Settings::create(
                [
                    'machine_id' => $id,
                    'settings' => json_encode($settings['settings']),
                    'bills' => '{"bills":[{"value":10,"enabled":false},{"value":50,"enabled":false},{"value":100,"enabled":false},{"value":500,"enabled":false},{"value":1000,"enabled":false},{"value":200,"enabled":false},{"value":2000,"enabled":false}],"coins":[{"value":1,"enabled":false},{"value":2,"enabled":false},{"value":5,"enabled":false},{"value":10,"enabled":false}]}',
                ]
            );

            return response()->json(['data'=>$newSettings,'message' => 'All good']);
        } catch (\Exception $error) {
            return response()->json(['data' => $settings, 'error' => $error->getMessage(), 'trace'=>$error->getTrace()]);
        }
    }


    public function updateSettings(Request $request, $id)
    {
        // Получаем данные из запроса
        $settingsData = $request->all();

        // Проверяем, существует ли ключ 'settings' в запросе
        if (!isset($settingsData['settings'])) {
            return response()->json(['error' => '"settings" key is missing from the request'], 400);
        }

        // Теперь мы уверены, что ключ 'settings' существует, и можем продолжить
        $settings = Settings::where('machine_id', $id)->first();

        if ($settings) {
            // Обновляем настройки
            $settings->settings = json_encode($settingsData['settings']);  // Сериализуем данные

            // Если 'bills' отсутствует, то присваиваем пустой массив или подходящее значение по умолчанию
            $settings->bills = isset($settingsData['bills']) && !empty($settingsData['bills'])
                ? json_encode($settingsData['bills'])
                : json_encode([
                    'bills' => [
                        ['value' => 10, 'enabled' => false],
                        ['value' => 50, 'enabled' => false],
                        ['value' => 100, 'enabled' => false],
                        ['value' => 500, 'enabled' => false],
                        ['value' => 1000, 'enabled' => false],
                        ['value' => 200, 'enabled' => false],
                        ['value' => 2000, 'enabled' => false],
                    ],
                    'coins' => [
                        ['value' => 1, 'enabled' => false],
                        ['value' => 2, 'enabled' => false],
                        ['value' => 5, 'enabled' => false],
                        ['value' => 10, 'enabled' => false],
                    ]
                ]);   // Пустой массив или другие значения
            $settings->online_kassa_settings = null;
            $settings->qr_payments_settings = null;
            $settings->save();

            return response()->json([
                'message' => 'Настройки успешно обновлены',
                'settings' => $settingsData['settings'] // Возвращаем обновленные настройки
            ]);
        } else {
            return response()->json(['error' => 'Settings not found'], 404);
        }
    }



    public function updateBills(Request $request, $id)
    {
        $bills = $request->all(); // Получаем данные, которые передаются в запросе
        $machineId = $id;

        // Преобразуем массив bills в строку JSON
        $bills = json_encode($bills);

        // Обновляем или создаем запись с данным machine_id
        $settings = Settings::updateOrCreate(
            ['machine_id' => $machineId], // Условие для поиска записи
            ['bills' => $bills] // Сериализуемый JSON для поля bills
        );

        // Возвращаем обновленные или созданные данные
        return response()->json(['bills' => json_decode($settings->bills)]);
    }

    public function getKassaSettings($id)
    {
        $settings = Settings::where('machine_id', $id)->pluck('online_kassa_settings');


        return response()->json(['kassa_settings'=>$settings]);
    }

    public function setKassaSettings(Request $request, $id)
    {
        // Получаем данные из запроса
        $clientData = $request->input('online_kassa_data');

        // Ищем запись с указанным machine_id
        $settings = Settings::where('machine_id', $id)->first();

        // Проверяем, существует ли запись
        if (!$settings) {
            return response()->json(['error' => 'Settings not found for this machine ID'], 404);
        }

        // Обновляем настройку кассы
        $settings->online_kassa_settings = $clientData;

        // Сохраняем изменения
        $settings->save();

        // Возвращаем обновленные настройки
        return response()->json(['kassa_settings' => $settings]);
    }

    public function getQrPaymentsSettings($id)
    {
        $settings = Settings::where('machine_id', $id)->pluck('qr_payments_settings');

        return response()->json(['qr_settings'=>$settings]);
    }

    public function setQrPaymentSettings(Request $request, $id)
    {
        $clientData = $request->all();

        // Проверяем, что данные не пустые
        if (empty($clientData)) {
            return response()->json(['error' => 'QR payment settings data cannot be empty'], 400);
        }

        // Если данные представляют собой массив или объект, сериализуем их в строку JSON
        if (is_array($clientData) || is_object($clientData)) {
            $clientData = json_encode($clientData);
        }

        // Проверяем, что данные в формате JSON
        if (json_decode($clientData) === null && json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Invalid JSON format for QR payment settings'], 400);
        }

        // Получаем настройки для указанного ID машины
        $settings = Settings::where('machine_id', $id)->first();

        if (!$settings) {
            return response()->json(['error' => 'Settings not found for this machine ID'], 404);
        }

        // Обновляем настройку qr_payments_settings
        $settings->qr_payments_settings = $clientData;

        // Сохраняем изменения в базе данных
        $settings->save();

        // Возвращаем обновленные настройки
        return response()->json($clientData, 200);
    }


}
