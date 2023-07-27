<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Training;
use App\Models\TrainingExamination;
use App\Models\TrainingReport;
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

        if ($status < 0) {
            // We'd need to chuck this in together with the seeder
            $this->closed();
            $closed_at = fake()->dateTimeBetween($startDate = '-1 years', $endDate = '-1 months');
        }

        // TODO: does it make sense to handle status like this? should be switch/case tho
        if ($status == -1) {
            // FIXME this doesn't work in the definition, understandably enough
            // TODO move to configure or similarly
            $this->completed();
        }

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
            // Give all non-queued trainings a mentor
            if ($training->status > 0) {
                $training->mentors()->attach(
                    User::whereHas('groups', function ($query) {
                        $query->where('id', 3);
                    })->inRandomOrder()->first(),
                    ['expire_at' => now()->addYears(5)]
                );
                TrainingReport::factory()->create([
                    'training_id' => $training->id,
                    'written_by_id' => $training->mentors()->inRandomOrder()->first(),
                ]);
            } elseif ($training->status == 1) {

            }

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

    public function closed(): Factory
    {
        return $this->afterCreating(function (Training $training) {
            $training->closed_at = fake()->dateTimeBetween($startDate = $training->started_at, $endDate = 'now');
        });
    }

    public function completed(): Factory
    {
        return $this->afterCreating(function (Training $training) {
            TrainingExamination::factory()->create([
                'examination_date' => $training->closed_at,
                'training_id' => $training->id,
                'examiner_id' => User::where('id', '!=', $training->user_id)->inRandomOrder()->first(),
            ]);
        });
    }
}
