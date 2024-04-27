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

        

        $images = json_decode($blogDetail->image);

        //dd($images);

        /*foreach ( $blogDetail as $blogDetail ) {
            if ( $blogDetail->image != '[]' ) {
                $blogDetail->image = Storage::url(
                    (json_decode($blogDetail->image))[0]->download_link
                );
            }
        }*/
        return view('web.blog.blog-detail', compact('blogDetail', 'images'));

    }
}
