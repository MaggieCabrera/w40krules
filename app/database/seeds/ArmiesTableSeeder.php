<?php

class ArmiesTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('armies')->delete();

        $armies = array(
        	array('name' => 'Ángeles Sangrientos' ),
        	array('name' => 'Demonios del Caos' ),
        	array('name' => 'Marines Espaciales del Caos' ),
        	array('name' => 'Ángeles Oscuros' ),
        	array('name' => 'Eldars Oscuros' ),
        	array('name' => 'Eldars' ),
        	array('name' => 'Caballeros Grises' ),
        	array('name' => 'Guardia Imperial' ),
        	array('name' => 'Necrones' ),
        	array('name' => 'Orkos' ),
        	array('name' => 'Hermanas de Batalla' ),
        	array('name' => 'Marines Espaciales' ),
        	array('name' => 'Lobos Espaciales' ),
        	array('name' => 'Imperio Tau' ),
        	array('name' => 'Tiránidos' )
        );

        // Uncomment the below to run the seeder
        DB::table('armies')->insert($armies);
    }

}