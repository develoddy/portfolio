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
            // Obtener todos los portafolios con sus detalles

            // $portfolios = Portfolio::with('portfolioDetails')->get();
            // Obtener todos los portafolios que tienen al menos un detalle con la categoría "Brand"
            $brands = Portfolio::whereHas('portfolioDetails', function ($query) {
                $query->where('category', 'Brand');
            })->get();

            // Obtener todos los portafolios que tienen al menos un detalle con la categoría "Project"
            $projects = Portfolio::whereHas('portfolioDetails', function ($query) {
                $query->where('category', 'Project');
            })->get();
            
            return view('web.portfolio', compact('portfolios', 'brands', 'projects'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($portfolio_id) {
        try {
            $portfolioDetails = PortfolioDetail::where('id', $portfolio_id)->get(); 
            return view('web.portfolio.portfolio-details', compact('portfolioDetails'));
            
            /*if (!empty($portfolioDetail)) {
                $description = implode(', ', $portfolioDetail->pluck('description')->toArray());
                $title = implode(', ', $portfolioDetail->pluck('title')->toArray());
                $images =  implode(', ', $portfolioDetail->pluck('image')->toArray()); 
                $arr_images =  json_decode($images, true);
            }
            return view('web.portfolio.portfolio-details', compact('portfolioDetails', 'description', 'title', 'arr_images'));*/

        } catch (\Throwable $th) {
            throw $th;
        }
       
    }
}
