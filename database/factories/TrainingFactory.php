<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Training;
use App\Models\TrainingExamination;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Training::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = fake()->numberBetween(-4, 3);
        $started_at = null;
        $closed_at = null;

        if ($status > 1 || $status == -1) {
            $started_at = $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 months');
        }
        // And close a select few

        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'status' => $status,
            'area_id' => Area::inRandomOrder()->first(),
            'motivation' => $this->faker->paragraph(15, false),
            'english_only_training' => false,
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 day'),
            'updated_at' => \Carbon\Carbon::now(),
            'type' => $this->faker->numberBetween(1, 5),
            'experience' => $this->faker->numberBetween(1, 5),
            'started_at' => $started_at,
            'closed_at' => $closed_at,
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Training $training) {
        });
    }

    /**
     * Summary of awaitingExam
     */
    public function awaitingExam(): Factory
    {
        return $this->state(function (array $attributes) {
            $started_at = $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-1 months');

            return [
                'status' => 3,
                'started_at' => $started_at,
            ];
        });
    }

    public function completed(): Factory
    {
        return $this->state(function (array $attributes) {
            TrainingExamination::factory()->create([
                'examination_date' => fake()->dateTimeBetween($startDate = $attributes['started_at'], $endDate = 'now'),
                'training_id' => $attributes['id'],
                'examiner_id' => User::where('id', '!=', $attributes['user_id'])->inRandomOrder()->first(),
            ]);

            return ['status' => 1];
        });
    }
}
