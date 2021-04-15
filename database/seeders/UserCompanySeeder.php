<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserCompany::factory(10)->create();
    }
}
