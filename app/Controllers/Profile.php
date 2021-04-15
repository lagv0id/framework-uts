<?php

namespace App\Controllers;

class Profile extends BaseController
{
	public function index()
	{
		echo view("header");
		echo view("profile");
		echo view("footer");
	}
}
