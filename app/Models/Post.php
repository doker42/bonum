<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
      'title',
      'content',
      'category_id',
      'user_id',
      'status',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }



}
