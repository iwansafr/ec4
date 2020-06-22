<?php
namespace App\Controllers;

class Admin extends BaseController
{
	public function __construct()
	{
		// dd($this->name);
	}
	public function index()
	{
		return view('pages/home');
	}
	
}