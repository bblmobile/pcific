<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerApplication extends Model {
	protected $dates = [
		'birth_date'
	];

	// Yaş kontrolü için bir metod
	public function isUnder18() {
		return $this->birth_date->age < 18;
	}
}
