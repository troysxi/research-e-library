<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\IndexController_Home;

class Index_Controller extends IndexController_Home
{
	public function showIndex()
	{   
        return View::make('index');

}