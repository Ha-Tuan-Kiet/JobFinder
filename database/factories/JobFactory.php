<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobFactory extends Factory
{
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order = 1; 
        static $order2 = 1; 
        static $order3 = 1; 
        static $order4 =1;
        return [
            'position'=>$this->faker->text(),
            'application_email'=>$this->faker->words(3, true),
            'image'=>$this->faker->realText(50),
            'details'=>$this->faker->realText(200),
            'amount'=>$this->faker->randomFloat(2,10,100),
            'experience'=>$this->faker->randomFloat(2,10),
            'salary_max'=>3000,
            'salary_min'=>2500,
            'salary_unit'=>'$',
            'work_time'=>8.00,
            'address'=>$this->faker->words(3,true),
            'deadline_for_submission'=>now(),
            'province_id'=>$order++,
            'update_on' =>now(),
            'created_on'=>now(),
            'job_type'=>'Full-time',
            'requirement'=>'English ...',
            'education'=>'12/12',
            'created_by'=>$order2++,
            'career_id'=>$order3++,
            'company_id'=>$order4++,
            'update_on' =>now(),
            'created_on'=>now(),
            'is_active'=>true
            //
        ];
    }
}
