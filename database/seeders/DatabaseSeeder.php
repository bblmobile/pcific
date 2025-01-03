<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		// User::factory(10)->create();

		User::factory()->create([
			'name' => 'Admin',
			'email' => 'admin@pcific.com',
			'password' => '$2y$12$Dbe5.2Pu12DSCx4aElYE2uJEf8bIfvYeFDbQoXkogkoT24qpbQc.S',
		]);
	}
}
