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

         
            // Obtener todos los portafolios que tienen al menos un detalle con la categoría "Brand"
            $brands = Portfolio::whereHas('portfolioDetail', function ($query) {
                $query->where('category', 'Brand');
            })->get();

            // Obtener todos los portafolios que tienen al menos un detalle con la categoría "Project"
            $projects = Portfolio::whereHas('portfolioDetail', function ($query) {
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

        } catch (\Throwable $th) {
            throw $th;
        }
       
    }
}
