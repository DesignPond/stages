<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('jobs')->truncate();

        $jobs = [
            [
                'id' => '1','user_id' => '1',
                'title' => $faker->sentence(4),
                'description' => $faker->text,
                'valid_until' => \Carbon\Carbon::now()->addMonth(1),
                'type_id' => 1, 'remunere' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '2','user_id' => '2',
                'title' => $faker->sentence(5),
                'description' => $faker->text,
                'valid_until' => \Carbon\Carbon::now()->addMonth(2),
                'type_id' => 2, 'remunere' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '3','user_id' => '3',
                'title' => $faker->sentence(2),
                'description' => $faker->text,
                'valid_until' => \Carbon\Carbon::now()->addWeeks(5),
                'type_id' => 3, 'remunere' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '4','user_id' => '2',
                'title' => $faker->sentence(6),
                'description' => $faker->text,
                'valid_until' => \Carbon\Carbon::now()->addDays(9),
                'type_id' => 1, 'remunere' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '5','user_id' => '3',
                'title' => $faker->sentence(4),
                'description' => $faker->text,
                'valid_until' => \Carbon\Carbon::now()->addMonth(3),
                'type_id' => 2, 'remunere' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => '6','user_id' => '1',
                'title' => $faker->sentence(5),
                'description' => $faker->text,
                'valid_until' => \Carbon\Carbon::now()->addWeeks(2),
                'type_id' => 3, 'remunere' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

        DB::table('jobs')->insert($jobs);
    }
}
