<?php

namespace App\Controllers;

class VisiMisi extends BaseController
{
	public function index()
	{
		echo view("header");
		echo view("visimisi");
		echo view("footer");
	}
}
