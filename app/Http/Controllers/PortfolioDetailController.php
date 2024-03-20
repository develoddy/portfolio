<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PortfolioDetail;

class PortfolioDetailController extends Controller
{
    public function index() {
        $portfolioDetail = PortfolioDetail::all();

        return view(
            'web.portfolio.portfolio-details',
            compact('portfolioDetail')
        );
    }

    public function show() {
       
    }
}
