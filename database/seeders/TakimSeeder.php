<?php

namespace Database\Seeders;

use App\Models\Takim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TakimSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		// Eklenecek takımlar
		$takimlar = [
			'Valorant Icarus',
			'Age of Empires',
			'PUBG',
			'CS: Global Offensive',
			'Valorant Youth',
		];

		// Eloquent ile veritabanına kaydetme
		foreach ($takimlar as $takim) {
			Takim::create(['name' => $takim]);
		}
	}
}
