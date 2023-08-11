<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MaestrosModel;
use App\Models\AlumnosModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DireccionesModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        /* return [
            'address' => $this->faker->streetAddress(),
            'model_type' => array_search($modelos, Relation::$morphMap),
            'model_id' => $modelos::factory(),
        ];*/



        return [
            'address' => $this->faker->streetAddress(),
            'model_id' => MaestrosModel::factory(),
            'model_type' => function (array $attributes) {
                return MaestrosModel::find($attributes['model_id'])->getMorphClass();
            }
        ];
    }

    public function forAlumnos(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'address' => $this->faker->streetAddress(),
                'model_id' => AlumnosModel::factory(),
                'model_type' => function (array $attributes) {
                    return AlumnosModel::find($attributes['model_id'])->getMorphClass();
                }
            ];
        });
    }
}
