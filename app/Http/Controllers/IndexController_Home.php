<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;

class IndexController_Home extends Controller
{
    protected $layout='index';

    protected function Layout()
    {
        if (!is_null($this->layout))
        {
            $this->layout=View::make($this->layout);
        }
    }
}