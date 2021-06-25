<?php

namespace Database\Seeders;


use App\Models\Role;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Role::factory(3)->create();
    //    $this->call(ProfileSeeder::class);
    //     $this->call(UserSeeder::class);
      $this->call(JobSeeder::class);
    //    $this->call(ProvinceSeeder::class);
    //   $this->call(UserCompanySeeder::class);
    //     $this->call(CareerSeeder::class);
    }
}
