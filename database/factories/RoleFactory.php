<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $input = array("admin", "user", "viewer");
          return [

              'role_name' => $input[array_rand($input,1)],
              'description' => $this->faker->paragraph(random_int(3, 5))
          ];

    }
}
