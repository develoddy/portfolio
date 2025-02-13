<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Models\Portfolio;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //public function __construct() {
        // Middleware para verificar la autenticación del usuario
    //    $this->middleware('auth');
    //}

    public function index() {

        try {
            $portfolios = Portfolio::take(6)->get();
       
            
            /*if (!$portfolios->isEmpty()) {
                foreach ( $portfolios as $portfolio ) {
                    if ( $portfolio->image != null || $portfolio->image != '[]' ) {
                        $portfolio->image = Storage::url(
                            (json_decode($portfolio->image))[0]
                        );
                    }
                }
            }*/

            //dd($portfolios);

            // Si la coleccion Portfolio no esta vacio
            /*if (!$portfolios->isEmpty()) {
                foreach ($portfolios as $portfolio) {
                    if ($portfolio->image != null && $portfolio->image != '[]') {
                        $imageArray = json_decode($portfolio->image, true);
                        if (is_array($imageArray) && !empty($imageArray)) {
                            $portfolio->image = Storage::url($imageArray[0]['download_link']);
                        }
                    }
                }
            }*/
            
        
            
            $blogs = Blog::take(4)->get();
           
            
            // Si la coleccion Blog no esta vacio
            //if (!$blogs->isEmpty()) {
                
                // foreach ( $blogs as $blog ) {
                //     if ( $blog->image != null || $blog->image != '[]' ) {
                        
                //         $blog->image = Storage::url(
                //             (json_decode($blog->image))[0]
                //         );
                //     }
                // }
            //}
            return view('home', compact('portfolios', 'blogs'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
