<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blank extends BaseController
{
    public function index()
    {

        return view('/blank');
    }
}
