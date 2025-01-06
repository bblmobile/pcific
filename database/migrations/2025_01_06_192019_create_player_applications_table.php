<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('player_applications', function (Blueprint $table) {
			$table->id();
			$table->string('first_name');
			$table->string('last_name');
			$table->date('birth_date');
			$table->string('email');
			$table->string('phone');

			// Veli bilgileri (nullable çünkü 18 yaş üstü için gerekli değil)
			$table->string('parent_full_name')->nullable();
			$table->string('parent_phone')->nullable();

			// Oyun seçimi
			$table->string('selected_game');

			// Mail gönderim kontrolü için
			$table->boolean('is_mail_sent')->default(false);

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('player_applications');
	}
};
