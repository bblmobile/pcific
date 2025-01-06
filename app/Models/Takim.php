<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Takim extends Model {

	public function basarilar(): HasMany {
		return $this->hasMany(Basari::class);
	}
}
