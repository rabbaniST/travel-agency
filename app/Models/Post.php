<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogCategory;

class Post extends Model
{
    use HasFactory;

    public function blog_category(){
        return $this->belongsTo(BlogCategory::class);
    }
}
