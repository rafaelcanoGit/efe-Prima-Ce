<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LenguajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Lenguaje::factory()->times(3)->create();
    }
}
