<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Basari extends Model {

	protected $casts = [
		'tarih' => 'date'
	];

	public function takim(): BelongsTo {
		return $this->belongsTo(Takim::class);
	}
}
