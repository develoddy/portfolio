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
        
            foreach ( $portfolios as $portfolio ) {
                if ( $portfolio->image != '[]' ) {
                    $portfolio->image = Storage::url(
                        (json_decode($portfolio->image))[0]->download_link
                    );
                }
            }

            return view('web.portfolio', compact('portfolios'));
        } catch (\Throwable $th) {
            throw $th;
        }
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

            if (empty($portfolioDetail)) {
                // El array $portfolioDetail está vacío
                // Realiza las acciones necesarias aquí
                $description = "-";
                $title = '-';
            } else {
                // El array $portfolioDetail no está vacío
                // Realiza las acciones necesarias aquí
                $description = implode(', ', $portfolioDetail->pluck('description')->toArray());
                $title = implode(', ', $portfolioDetail->pluck('title')->toArray());
            }

            
            
            return view('web.portfolio.portfolio-details', compact('portfolioDetail', 'description', 'title'));

        } catch (\Throwable $th) {
            throw $th;
        }
        
        
       
    }
}
