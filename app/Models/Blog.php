<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Filament\Forms\Components\DateTimePicker;
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
        'blog_id',
        "created_at",
        "updated_at",
    ];


    public function blogDetail(): BelongsTo
    {
        return $this->belongsTo(BlogDetail::class, 'blog_id');
    }


    public function link() {
        return str_replace(' ', '-', strtolower($this->title));
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
                Select::make('blog_id')
                    ->label('Blog detail')
                    ->relationship('blogDetail', 'title')
                    ->searchable()
                    ->preload()
                    ->createOptionForm(BlogDetail::getForm())
                    ->editOptionForm(BlogDetail::getForm())
                    ->required(),
            ]),
        ];
    }

}
