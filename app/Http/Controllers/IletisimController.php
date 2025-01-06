<?php

namespace App\Http\Controllers;

use App\Models\Iletisim;
use Illuminate\Http\Request;

class IletisimController extends Controller {
	public function show() {
		return view('iletisim');
	}

	public function store(Request $request) {
		// Form verilerini doğrula
		$validatedData = $request->validate([
			'first_name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
			'email' => 'required|email|max:255',
			'phone' => 'nullable|string|max:20',
			'message' => 'required|string',
		]);

		// Veritabanına kaydet
		Iletisim::create($validatedData);

		// Başarılı mesajı ile geri yönlendir
		return redirect()->back()->with('success', 'Mesajınız başarılı bir şekilde gönderilmiştir.');
	}
}
