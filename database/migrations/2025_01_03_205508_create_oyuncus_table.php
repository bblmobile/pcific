<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('oyuncus', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('nickname');
			$table->string('team')->nullable();
			$table->text('bio')->nullable();
			$table->string('favourite_weapon')->nullable();
			$table->string('favourite_agent')->nullable();
			$table->string('instagram')->nullable();
			$table->string('x')->nullable();
			$table->string('twich')->nullable();
			$table->string('youtube')->nullable();
			$table->string('image')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('oyuncus');
	}
};
