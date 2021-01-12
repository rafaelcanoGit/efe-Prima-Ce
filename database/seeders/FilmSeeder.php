<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lenguajes = DB::table('lenguajes')->get();
        $films = \App\Models\Film::factory(15)->create([
            'lenguaje_id' => $lenguajes->random()->id
        ]);

    }
}
