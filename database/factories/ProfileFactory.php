<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
// use Profiles as GlobalProfiles;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'profile_id' => Profile::all()->random()->id,
            'phone'=>$this->faker->phoneNumber,
            'first_name'=>$this->faker->name,
            'last_name'=>$this->faker->name,
            'full_name' => $this->faker->name,
            'day_of_birth' => now(),
            'gender'=>$this->faker->sentence,
            'address' => $this->faker->sentence,
            'avatar' => $this->faker->name,
        ];
    }
}
