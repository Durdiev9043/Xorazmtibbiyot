<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name_uz', 'name_ru', 'name_en'];

//    public function parent()
//    {
//        return $this->belongsTo(Category::class, 'parent_id');
//    }

//    public function children()
//    {
//        return $this->hasMany(Category::class, 'parent_id');
//    }

//    public function news()
//    {
//        return $this->hasMany(News::class);
//    }
//    public function subcategories()
//    {
//        return $this->hasMany(Category::class, 'parent_id');
//    }
}
