<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogDetail;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        
        /*foreach ( $blogs as $blog ) {
            if ( $blog->image != '[]' ) {
                $blog->image = Storage::url(
                    (json_decode($blog->image))[0]->download_link
                );
            }
        }*/

        return view('web.blog-list-sidebar', compact('blogs'));
    }

    public function show($blog_id) {

        $blogDetail = blogDetail::where('id', $blog_id)->first();

        if (!$blogDetail) {
            abort(404, 'Blog no encontrado'); // Retorna un error 404 si no se encuentra el blog
        }
        
        $images = json_decode($blogDetail->image);
        return view('web.blog.blog-detail', compact('blogDetail', 'images'));

    }
}
