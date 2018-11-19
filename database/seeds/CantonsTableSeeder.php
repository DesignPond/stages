<?php

use Illuminate\Database\Seeder;

class CantonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cantons')->truncate();

        $cantons = array(
            array('id' => '1','title' => 'Appenzell Rhodes-Extérieures (AR)'),
            array('id' => '2','title' => 'Appenzell Rhodes-Intérieures (AI)'),
            array('id' => '3','title' => 'Argovie (AG)'),
            array('id' => '4','title' => 'Bâle-Campagne (BL)'),
            array('id' => '5','title' => 'Bâle-Ville (BS)'),
            array('id' => '6','title' => 'Berne (BE)'),
            array('id' => '7','title' => 'Fribourg (FR)'),
            array('id' => '8','title' => 'Genève (GE)'),
            array('id' => '9','title' => 'Glaris (GL)'),
            array('id' => '10','title' => 'Grisons (GR)'),
            array('id' => '11','title' => 'Jura (JU)'),
            array('id' => '12','title' => 'Lucerne (LU)'),
            array('id' => '13','title' => 'Neuchâtel (NE)'),
            array('id' => '14','title' => 'Nidwald (NW)'),
            array('id' => '15','title' => 'Obwald (OW)'),
            array('id' => '16','title' => 'Schaffhouse (SH)'),
            array('id' => '17','title' => 'Schwyz (SZ)'),
            array('id' => '18','title' => 'Soleure (SO)'),
            array('id' => '19','title' => 'St-Gall (SG)'),
            array('id' => '20','title' => 'Tessin (TI)'),
            array('id' => '21','title' => 'Thurgovie (TG)'),
            array('id' => '22','title' => 'Uri (UR)'),
            array('id' => '23','title' => 'Valais (VS)'),
            array('id' => '24','title' => 'Vaud (VD)'),
            array('id' => '25','title' => 'Zoug (ZG)'),
            array('id' => '26','title' => 'Zurich (ZU)')
        );

        DB::table('cantons')->insert($cantons);
    }
}
