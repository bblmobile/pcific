<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('iletisim', function (Blueprint $table) {
			$table->id();
			$table->string('first_name'); // Ad
			$table->string('last_name'); // Soyad
			$table->string('email'); // E-posta
			$table->string('phone')->nullable(); // Telefon
			$table->text('message'); // Mesaj
			$table->timestamps(); // Oluşturulma ve güncellenme tarihleri
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('iletisim');
	}
};
