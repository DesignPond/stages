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
            array('id' => '1' , 'slug' => 'CH-AR', 'title' => 'Appenzell Rhodes-Extérieures (AR)'),
            array('id' => '2' , 'slug' => 'CH-AI', 'title' => 'Appenzell Rhodes-Intérieures (AI)'),
            array('id' => '3' , 'slug' => 'CH-AG', 'title' => 'Argovie (AG)'),
            array('id' => '4' , 'slug' => 'CH-BL', 'title' => 'Bâle-Campagne (BL)'),
            array('id' => '5' , 'slug' => 'CH-BS', 'title' => 'Bâle-Ville (BS)'),
            array('id' => '6' , 'slug' => 'CH-BE', 'title' => 'Berne (BE)'),
            array('id' => '7' , 'slug' => 'CH-FR', 'title' => 'Fribourg (FR)'),
            array('id' => '8' , 'slug' => 'CH-GE', 'title' => 'Genève (GE)'),
            array('id' => '9' , 'slug' => 'CH-GL', 'title' => 'Glaris (GL)'),
            array('id' => '10', 'slug' => 'CH-GR', 'title' => 'Grisons (GR)'),
            array('id' => '11', 'slug' => 'CH-JU', 'title' => 'Jura (JU)'),
            array('id' => '12', 'slug' => 'CH-LU', 'title' => 'Lucerne (LU)'),
            array('id' => '13', 'slug' => 'CH-NE', 'title' => 'Neuchâtel (NE)'),
            array('id' => '14', 'slug' => 'CH-NW', 'title' => 'Nidwald (NW)'),
            array('id' => '15', 'slug' => 'CH-OW', 'title' => 'Obwald (OW)'),
            array('id' => '16', 'slug' => 'CH-SH', 'title' => 'Schaffhouse (SH)'),
            array('id' => '17', 'slug' => 'CH-SZ', 'title' => 'Schwyz (SZ)'),
            array('id' => '18', 'slug' => 'CH-SO', 'title' => 'Soleure (SO)'),
            array('id' => '19', 'slug' => 'CH-SG', 'title' => 'St-Gall (SG)'),
            array('id' => '20', 'slug' => 'CH-TI', 'title' => 'Tessin (TI)'),
            array('id' => '21', 'slug' => 'CH-TG', 'title' => 'Thurgovie (TG)'),
            array('id' => '22', 'slug' => 'CH-UR', 'title' => 'Uri (UR)'),
            array('id' => '23', 'slug' => 'CH-VS', 'title' => 'Valais (VS)'),
            array('id' => '24', 'slug' => 'CH-VD', 'title' => 'Vaud (VD)'),
            array('id' => '25', 'slug' => 'CH-ZG', 'title' => 'Zoug (ZG)'),
            array('id' => '26', 'slug' => 'CH-ZU', 'title' => 'Zurich (ZU)')
        );

        DB::table('cantons')->insert($cantons);
    }
}
