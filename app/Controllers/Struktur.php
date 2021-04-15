<?php

namespace App\Controllers;

class Struktur extends BaseController
{
	public function index()
	{
		echo view("header");
		echo view("struktur");
		echo view("footer");
	}
}
