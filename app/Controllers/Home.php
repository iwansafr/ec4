<?php
namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = $this->esg->config_template;
		return view('pages/home',['data'=>$data]);
	}

}
