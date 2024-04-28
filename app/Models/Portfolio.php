<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PortfolioDetail;


class Portfolio extends Model
{
    use HasFactory;

    protected $table = "portfolio";

    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'portfolio_detail_id'
    ];

    public function link() {
        return str_replace(' ', '-', strtolower($this->title));
    }

    public function portfolioDetails()
    {
        //return $this->hasMany(PortfolioDetail::class, 'id', 'portfolio_detail_id');
        return $this->hasOne(PortfolioDetail::class, 'id', 'portfolio_detail_id');
    }
}
