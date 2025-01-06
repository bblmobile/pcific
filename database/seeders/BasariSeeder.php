<?php

namespace Database\Seeders;

use App\Models\Basari;
use App\Models\Takim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasariSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		$basarilar = [
			['derece' => 'Birincilik', 'oyun' => 'Valorant Icarus', 'turnuva' => 'Sneaky Fox 2', 'tarih' => '2022-12-12'],
			['derece' => 'İkincilik', 'oyun' => 'Age of Empires', 'turnuva' => 'GPlex', 'tarih' => '2022-11-20'],
			['derece' => 'Birincilik', 'oyun' => 'PUBG', 'turnuva' => '29 EKİM KUPASI', 'tarih' => '2022-10-29'],
			['derece' => 'Birincilik', 'oyun' => 'Age of Empires', 'turnuva' => 'GPlex', 'tarih' => '2022-10-23'],
			['derece' => 'İkincilik', 'oyun' => 'Valorant Icarus', 'turnuva' => 'Elowell.GG', 'tarih' => '2022-09-04'],
			['derece' => 'İkincilik', 'oyun' => 'PUBG', 'turnuva' => 'Kucoin Cup', 'tarih' => '2022-09-01'],
			['derece' => 'İkincilik', 'oyun' => 'CS: Global Offensive', 'turnuva' => 'ESA-Supreme', 'tarih' => '2022-08-31'],
			['derece' => 'İkincilik', 'oyun' => 'PUBG', 'turnuva' => 'PUBG Zafer Kupası', 'tarih' => '2022-08-30'],
			['derece' => 'İkincilik', 'oyun' => 'Valorant Youth', 'turnuva' => 'Topluluk Kupası II', 'tarih' => '2022-06-12'],
			['derece' => 'Birincilik', 'oyun' => 'Valorant Youth', 'turnuva' => 'Elowell.GG', 'tarih' => '2022-06-04'],
			['derece' => 'Birincilik', 'oyun' => 'Valorant Youth', 'turnuva' => 'Top Agents', 'tarih' => '2022-05-19'],
			['derece' => 'Çeyrek Finalist', 'oyun' => 'CS: Global Offensive', 'turnuva' => 'Asus Rog Masters', 'tarih' => '2022-05-17'],
			['derece' => 'İlk 50', 'oyun' => 'Age of Empires', 'turnuva' => 'Dünya Sıralaması', 'tarih' => '2022-05-16'],
			['derece' => 'Üçüncülük', 'oyun' => 'Valorant Icarus', 'turnuva' => 'CCLValorant I', 'tarih' => '2022-05-11'],
			['derece' => 'Birincilik', 'oyun' => 'Age of Empires', 'turnuva' => 'Ring of Fire II', 'tarih' => '2022-04-25'],
			['derece' => 'Birincilik', 'oyun' => 'Valorant Youth', 'turnuva' => 'Close Encounter', 'tarih' => '2022-04-09'],
			['derece' => 'Birincilik', 'oyun' => 'Valorant Youth', 'turnuva' => 'Topluluk Kupası', 'tarih' => '2022-03-04'],
			['derece' => 'Üçüncülük', 'oyun' => 'Valorant Youth', 'turnuva' => 'Top Agents', 'tarih' => '2022-03-13'],
		];

		// Takımları başarılar ile eşleştirip veritabanına ekleme
		foreach ($basarilar as $basari) {
			$takim = Takim::where('name', $basari['oyun'])->first();

			if ($takim) {
				Basari::create([
					'takim_id' => $takim->id,
					'oyun' => $basari['oyun'],
					'turnuva' => $basari['turnuva'],
					'derece' => $basari['derece'],
					'tarih' => $basari['tarih'],
				]);
			}
		}
	}
}
