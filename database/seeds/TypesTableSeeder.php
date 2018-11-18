<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->truncate();

        $types = [
            ['id' => '1','semaines' => '4 semaines','periode' => 'Un seul bloc','pourcentage' => '100%'],
            ['id' => '2','semaines' => '6 semaines','periode' => 'Plein temps','pourcentage' => '100% ou 2x 50%'],
            ['id' => '3','semaines' => '3 mois ou 2x3 mois','periode' => 'Plein temps','pourcentage' => '100% ou 2x 50%']
        ];

        DB::table('types')->insert($types);
    }
}
