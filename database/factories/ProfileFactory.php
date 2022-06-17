<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Rol;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'fkuser' => User::unique()->random()->id,
            'fkrol' => Rol::all()->random()->id,
        ];
    }
}
