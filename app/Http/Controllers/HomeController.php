<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index() {

        try {
            $portfolios = Portfolio::take(6)->get();
        
            foreach ( $portfolios as $portfolio ) {
                if ( $portfolio->image != '[]' ) {
                    $portfolio->image = Storage::url(
                        (json_decode($portfolio->image))[0]->download_link
                    );
                }
            }

            return view('home', compact('portfolios'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
