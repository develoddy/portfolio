<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class);
    }


    public static function getForm(): array
    {
      return [
        TextInput::make('title')
            ->label('Titulo')
            ->required()
            ->maxLength(255),
      ];
    }
}