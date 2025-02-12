<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class BlogDetail extends Model
{
    use HasFactory;

    protected $table = "blog_details";

    protected $fillable = [
        "id",
        "comment_id",
        "title",
        "description",
        "image",
        "related_images",
        "countComment",
        "viewComment",
        "Published",
        "created_at",
        "updated_at",
    ];

    public function portfolio() 
    {
        return $this->hasMany(Blog::class);
    }

    

}
