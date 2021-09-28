<?php

namespace Database\Factories;

use App\Models\Customer;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create('ja_JP');
        return [
            'name' => $faker->name(),
            'email' => $faker->email(),
            'zipcode' => $faker->postcode(),
            'address' => $faker->streetAddress(),
            'phone' => $faker->phoneNumber(),
        ];
    }
}
