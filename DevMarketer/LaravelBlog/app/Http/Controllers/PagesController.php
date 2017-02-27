<?php

//ESTE ES EL CONTROLADOR DE PÁGINAS ESTÁTICAS

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages/welcome');
	}

	public function getAbout() {
		$first = "Nico";
		$last = "Pavez";

		$fullname = $first . " " . $last;
		$email = "nico@gmail.com";
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages/contact');
	}

}

?>