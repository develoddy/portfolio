<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use App\Models\PortfolioDetail;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;


class Portfolio extends Model
{
    use HasFactory;

    protected $table = "portfolio";

    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'portfolio_id'
    ];

    public function link() {
        return str_replace(' ', '-', strtolower($this->title));
    }

    public function portfolioDetail(): BelongsTo
    {
        return $this->belongsTo(PortfolioDetail::class);
    }


    public static function getForm(): array 
    {
        return [

            Section::make('Información del contenido')
                ->columns(2)
                ->schema([
                    RichEditor::make('title')
                        ->label('Titulo')
                        ->columnSpanFull()
                        ->maxLength(100),
                    RichEditor::make('description')
                        ->label('Descripción')
                        ->maxLength(200)
                        ->columnSpanFull(),
                    FileUpload::make('image')
                        ->label('Imagen')
                        ->image()
                        ->required(),
                ]),

            Section::make('Organización y publicación')
            ->columns(2)
            ->schema([
                Select::make('portfolio_detail_id')
                    ->label('Portfolio detail')
                    ->relationship('portfolioDetail', 'title')
                    ->searchable()
                    ->preload()
                    ->createOptionForm(PortfolioDetail::getForm())
                    ->editOptionForm(PortfolioDetail::getForm())
                    ->required(),
            ]),
        ];
    }

    
}
