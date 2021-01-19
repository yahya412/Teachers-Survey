<?php

namespace Database\Factories;

use App\Models\Url;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class UrlFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Url::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array=['user1','user2','user3'];
        
        return [
           'url' => Str::random(10),
            'user_id' => $this->faker->numberBetween(1,5),
            'section' => Str::random(1),
            'date' => now(),
        ];    }
}
