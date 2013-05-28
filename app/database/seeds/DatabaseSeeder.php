<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('RulesTableSeeder');
		$this->call('ArmiesTableSeeder');
		$this->call('UnitsTableSeeder');
		$this->call('CharactersTableSeeder');
		$this->call('UnitsTableSeeder');
		$this->call('WeaponsTableSeeder');
		$this->call('Character_typesTableSeeder');
		$this->call('UnittypesTableSeeder');
	}

}