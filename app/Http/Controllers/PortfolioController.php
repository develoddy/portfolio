<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioDetail;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index() {
        try {
            $portfolios = Portfolio::all();
            return view('web.portfolio', compact('portfolios'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($portfolio_id) {
        try {
            $portfolioDetail = PortfolioDetail::where('id', $portfolio_id)->get(); 
            
            if (!empty($portfolioDetail)) {
                $description = implode(', ', $portfolioDetail->pluck('description')->toArray());
                $title = implode(', ', $portfolioDetail->pluck('title')->toArray());
                $images =  implode(', ', $portfolioDetail->pluck('image')->toArray()); 
                $arr_images =  json_decode($images, true);
            }
            return view('web.portfolio.portfolio-details', compact('portfolioDetail', 'description', 'title', 'arr_images'));

        } catch (\Throwable $th) {
            throw $th;
        }
       
    }
}
