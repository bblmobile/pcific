<?php

namespace App\Http\Controllers;

use App\Models\PlayerApplication;
use Carbon\Carbon;
use Illuminate\Http\Request;


class OyuncuController extends Controller {
	public function show() {
		return view('oyuncuBasvuru');
	}

	public function create(Request $request) {
		$rules = [
			'first_name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
			'birth_date' => 'required|date',
			'email' => 'required|email|max:255',
			'phone' => 'required|string|max:20',
			'selected_game' => 'required|string|in:Valorant,CS,FC,LOL,DOTA 2,PB,R6',
		];

		// 18 yaş kontrolü
		$birthDate = Carbon::parse($request->birth_date);
		if ($birthDate->age < 18) {
			$rules['parent_full_name'] = 'required|string|max:255';
			$rules['parent_phone'] = 'required|string|max:20';
		}

		$validated = $request->validate($rules);

		$application = PlayerApplication::create($validated);

		return redirect()->back()->with('success', 'Başvurunuz başarıyla alınmıştır.');
	}
}
