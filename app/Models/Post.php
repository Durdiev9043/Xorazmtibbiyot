<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title_uz', 'title_ru', 'title_en',
        'content_uz', 'content_ru', 'content_en',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(PostImage::class);
    }

    // Birinchi rasm preview uchun
    public function getMainImageUrlAttribute()
    {
        $image = $this->images()->first();
        return $image ? asset('storage/' . $image->image) : asset('no-image.jpg');
    }
}
