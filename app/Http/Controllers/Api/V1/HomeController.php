<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;

class HomeController extends ApiController
{
    public function index()
    {
        return 1;
    }
}
