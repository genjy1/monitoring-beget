<?php

namespace Database\Seeders;

use App\Models\Sales;
use Database\Factories\SalesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Sales::factory(20)->create();
    }
}
