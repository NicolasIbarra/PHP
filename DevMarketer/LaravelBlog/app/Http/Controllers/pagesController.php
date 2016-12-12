<?php 

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');
	}

	public function getAbout() {
		$name = "Nico";
		$last = "Pavez";

		$fullname = $name . " " . $last;
		$email = "nico@pavez.com";
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);

		return view('pages.about')->withFullname($fullname)->withEmail($email);
	}

	public function getContact() {
		return view('pages.contact');
	}
}

?>