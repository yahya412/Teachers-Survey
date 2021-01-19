<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
   

    public function definition()
    {
        $types = ['food', 'shopping', 'entertainment', 'travel', 'other'];
         
        return [
           'description' => $this->faker->realText(40) ,
           'amount' => $this->faker->numberBetween(100,500),
           'type' => Arr::random($types),
           'created_at'=>now(),
        ];
    }
}
