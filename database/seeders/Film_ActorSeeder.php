<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Film_ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $films = DB::table('films')->get();
        $actors = DB::table('actors')->get();
        foreach ($actors as $actor) {
            DB::table('films_actors')->insert([
                'actor_id' => $actor->actor_id,
                'film_id'  => $films->random()->film_id
            ]);
        }
    }
}
