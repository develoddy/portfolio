<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogDetail;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";

    protected $fillable = [
        "id",
        "title",
        "description",
        "image",
        "countComment",
        "created_at",
        "updated_at",
    ];

    public function BlogDetail(): BelongsTo
    {
        return $this->belongsTo(BlogDetail::class);
    }


    public function link() {
        return str_replace(' ', '-', strtolower($this->title));
    }

}
