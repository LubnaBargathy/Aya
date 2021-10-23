<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class cityfactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $long = 17.228331; // $bo=20.5215
        $lati = 26.3351;   // $bt=31.5594
        return [
            'country_id' =>$this->faker->word,
            'name' =>$this->faker->words,
            'slug' =>$this->faker->slug,
            'intro' =>$this->faker->word,
            'thumb' =>$this->faker->imageUrl(40, 40),
            'description' =>$this->faker->word,
            'banner' =>$this->faker->imageUrl(1600, 500),
            'currency' =>$this->faker->currencyCode,
            'language' =>$this->faker->languageCode,
            'lat' =>$this->faker->latitude($min = ($lati - (rand(0,20)/1000)), $max = ($lati + (rand(0,20)/1000))), //27.046410352709675, 17.249904340253504
            'lng' =>$this->faker->longitude($min = ($long - (rand(0,20)/1000)), $max = ($long + (rand(0,20)/1000))),
            'priority' =>$this->faker->randomDigit,
            'status' =>$this->faker->boolean,


        ];
    }
}
