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

        for ($i = 1; $i <= 40; $i++) {

            $user = array_random(range(1,40));

            $job = [
                'user_id' => $user,
                'title' => $faker->sentence(4),
                'description' => $faker->text,
                'valid_until' => \Carbon\Carbon::now()->addWeek($i),
                'type_id' => array_random([1,2,3]),
                'remunere' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];

            DB::table('jobs')->insert($job);
        }

    }
}
