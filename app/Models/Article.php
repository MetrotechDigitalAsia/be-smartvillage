<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function articleCategory(){
        return $this->belongsTo(ArticleCategory::class, 'article_category', 'id')->select('id', 'article_category as category');
    }
}
