<?php

namespace Database\Factories;

use App\Models\Kategori_Bencana;
use Illuminate\Database\Eloquent\Factories\Factory;

class Kategori_BencanaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kategori_Bencana::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori_bencana' => $this->faker->sentence (3),
            
        ];
    }
}
