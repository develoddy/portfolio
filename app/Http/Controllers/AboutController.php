<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index() {

        try {
            $abouts = About::take(6)->get();

            foreach ( $abouts as $about ) {
                if ( $about->images != '[]' ) {
                    $images = json_decode(
                        $about->images
                    );
                    foreach ( $images as $key => $image ) {
                        $images[$key] = Storage::url($image);
                    }
                    $about->images = $images;
                }
            }
            return view('web.about-creative', compact('abouts'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
