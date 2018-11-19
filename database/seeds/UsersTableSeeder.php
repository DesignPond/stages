<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->truncate();

        for ($i = 1; $i <= 3; $i++) {
            $user =  [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'rue' => $faker->streetAddress,
                'canton_id' => $faker->numberBetween(1,26),
                'npa' => $faker->numberBetween(1000,9000),
                'ville' => $faker->city,
                'telephone' => $faker->phoneNumber,
                'fax' => $faker->phoneNumber,
                'cp' => $faker->numberBetween(1000,9000),
                'complement' => $faker->sentence,
                'website' => $faker->domainName,
                'social' => $faker->text,
            ];
            DB::table('users')->insert([$user]);
        }

    }
}
