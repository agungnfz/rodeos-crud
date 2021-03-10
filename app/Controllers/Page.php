<?php namespace App\Controllers;

class Page extends BaseController
{
	public function rodeos()
	{
		echo view ('rodeos');
	}

}