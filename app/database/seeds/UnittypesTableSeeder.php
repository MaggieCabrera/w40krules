<?php

class UnittypesTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('unittypes')->delete();

        $unittypes = array(

        	array('name' => 'Cuartel General' ),
        	array('name' => 'Tropas de línea' ),
        	array('name' => 'Elite' ),
        	array('name' => 'Ataque Rápido' ),
        	array('name' => 'Apoyo Pesado' ),
        	array('name' => 'Vehiculos' )

        );


        // Uncomment the below to run the seeder
        DB::table('unittypes')->insert($unittypes);
    }

}