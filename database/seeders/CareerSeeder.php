<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Career::factory(4)->create();
    }
}
