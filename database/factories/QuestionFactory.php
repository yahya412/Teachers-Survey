<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users=1;
        $url=['aaaa','bbbb','cccc','dddd'];

        return [
            'q1'=>$this->faker->numberBetween(1,5),
            'q2'=>$this->faker->numberBetween(1,5),
            'q3'=>$this->faker->numberBetween(1,5),
            'q4'=>$this->faker->numberBetween(1,5),
            'q5'=>$this->faker->numberBetween(1,5),
            'q6'=>$this->faker->numberBetween(1,5),
            'q7'=>$this->faker->numberBetween(1,5),
            'q8'=>$this->faker->numberBetween(1,5),
            'q9'=>$this->faker->numberBetween(1,5),
            'q10'=>$this->faker->numberBetween(1,5),
            'qn'=>$this->faker->realText(100),
            'url_id'=>$this->faker->numberBetween(1,5),
            'user_id'=>$users,
            
        
        ];
    }
}
