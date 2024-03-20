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
        'image'
    ];

    public function link() {
        return str_replace(' ', '-', strtolower($this->title));
    }

    public function portfolioDetails()
    {
        return $this->hasMany(PortfolioDetail::class, 'id');
    }
}
