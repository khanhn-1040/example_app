<?php

namespace App\Http\Controllers;

use App\Events\OrderShipped;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Khanh';

        OrderShipped::dispatch($name);
    }
}
