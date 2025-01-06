<?php

namespace App\Http\Controllers;

use App\Models\Takim;
use Illuminate\Http\Request;

class BasariController extends Controller {
	public function index() {

		$takimlar = Takim::with('basarilar')->get();
		return view('basari', compact('takimlar'));
	}
}
