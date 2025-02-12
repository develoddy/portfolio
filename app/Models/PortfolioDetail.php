<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\FileUpload;
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
        Textarea::make('description')
            ->columnSpanFull(),
        FileUpload::make('image')
            ->image(),
        TextInput::make('client')
            ->maxLength(255)
            ->default(null),
        TextInput::make('awards')
            ->maxLength(255)
            ->default(null),
        TextInput::make('category')
            ->maxLength(255)
            ->default(null),
        TextInput::make('related_images')
            ->maxLength(255)
            ->default(null),
      ];
    }
}