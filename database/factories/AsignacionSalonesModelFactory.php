<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MaestrosModel;
use App\Models\AlumnosModel;
use App\Models\SalonesModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AsignacionSalonesModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $salones = SalonesModel::all();
        $salonescount = count($salones);

        return [
            'id_salon' => $this->faker->numberBetween(1, $salonescount),
            'model_id' => MaestrosModel::factory(),
            'model_type' => function (array $attributes) {
                return MaestrosModel::find($attributes['model_id'])->getMorphClass();
            }
        ];
    }

    public function forAlumnos(): Factory
    {
        $salones = SalonesModel::all();
        $salonescount = count($salones);
        /* Esto deberia ir en un trait */

        return $this->state(function (array $attributes) {
            return [
                'id_salon' => $this->faker->numberBetween(1, $salonescount),
                'model_id' => AlumnosModel::factory(),
                'model_type' => function (array $attributes) {
                    return AlumnosModel::find($attributes['model_id'])->getMorphClass();
                }
            ];
        });
    }
}
