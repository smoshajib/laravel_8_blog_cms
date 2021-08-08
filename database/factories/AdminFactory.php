<?php

namespace Database\Factories;
use App\Models\Admin;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_number' => null,
            'profile_image_url' => null,
            'email_verified_at' => now(),
            'password' =>Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ];
    }
}
