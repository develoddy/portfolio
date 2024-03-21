<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioDetail;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index() {

        $portfolios = Portfolio::all();
        
        foreach ( $portfolios as $portfolio ) {
            if ( $portfolio->image != '[]' ) {
                $portfolio->image = Storage::url(
                    (json_decode($portfolio->image))[0]->download_link
                );
            }
        }

        return view('web.portfolio', compact('portfolios'));
    }

    public function show($portfolio_id) {
        try {
            $portfolioDetail = PortfolioDetail::where('portfolio_id', $portfolio_id)->get();
            
            // Verificar si el objeto está vacío
            if ($portfolioDetail->isEmpty()) {
                 // El objeto está vacío
                 $portfolioDetail = [];
            } else {
                // El objeto no está vacío
                // Hacer algo con el objeto, como mostrar sus detalles
                foreach ( $portfolioDetail as $portfolio ) {
                    if ( $portfolio->related_images != '[]' ) {
                        $related_images = json_decode(
                            $portfolio->related_images
                        );
                        foreach ( $related_images as $key => $image ) {
                            $related_images[$key] = Storage::url($image);
                        }
                        $portfolio->related_images = $related_images;
                    }
                }
            }    
            return view('web.portfolio.portfolio-details', compact('portfolioDetail'));

        } catch (\Throwable $th) {
            throw $th;
        }
        
        
       
    }
}
