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

			User::create(array(
				'username' => 'admin',
				'password' => Hash::make('admin'),
			));
		// $this->call('UserTableSeeder');
	}

}