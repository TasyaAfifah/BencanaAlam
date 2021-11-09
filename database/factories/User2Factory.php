<?php

namespace Database\Factories;

use App\Models\User2;
use Illuminate\Database\Eloquent\Factories\Factory;

class User2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(8, 32),
            'tgl_lahir' => $this->faker->date()
        ];
    }
}
