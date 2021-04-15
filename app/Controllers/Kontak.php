<?php

namespace App\Controllers;

class Kontak extends BaseController
{
	public function index()
	{
		echo view("header");
		echo view("kontak");
		echo view("footer");
	}
}
