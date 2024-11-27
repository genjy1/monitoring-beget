<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id(); // Основной ключ для таблицы
            // Добавление внешнего ключа для таблицы 'good'
            $table->foreignId('good_id')->constrained('goods')->onDelete('cascade')->onUpdate('cascade');
            // Добавление внешнего ключа для таблицы 'machine'
            $table->foreignId('machine_id')->constrained('machines')->onDelete('cascade')->onUpdate('cascade');
            // Поле для кода
            $table->string('code')->unique(); // Код (с учетом уникальности)
            // Поле для названия
            $table->string('name'); // Название
            // Булевое поле для статуса "включено"
            $table->boolean('is_enabled')->default(true); // Включена (по умолчанию true)
            // Булевое поле для статуса "доступно"
            $table->boolean('is_available')->default(true); // Доступна (по умолчанию true)
            // Поле для цены
            $table->decimal('price', 10, 2); // Цена с точностью 10 знаков, 2 из которых после запятой
            // Поле для остатка
            $table->integer('stock'); // Остаток (целое число)
            // Поле для емкости
            $table->string('capacity'); // Емкость (например, литры или другая единица измерения)
            // Поле для даты "Годен до"
            $table->date('expiry_date'); // Годен до (дата)
            // Столбцы для отслеживания времени создания и обновления
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
