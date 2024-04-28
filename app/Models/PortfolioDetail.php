<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

class PortfolioDetail extends Model
{
    use HasFactory;

    protected $table = "portfolio_detail";

    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'client',
        'awards',
        'category',
        'related_images',
        'created_at',
        'updated_at',
    ];

    public function portfolio() 
    {
        //return $this->belongsTo(Portfolio::class, 'portfolio_detail_id');
        return $this->belongsTo(Portfolio::class, 'portfolio_detail_id');
    }
}