<?php

namespace Database\Seeders;
use App\Actor;

use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Actor::factory(15)->create();
    }
}
