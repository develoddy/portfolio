<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return view('');
    }

    public function show() {
        return view('web.portfolio.portfolio-details');
    }
}
