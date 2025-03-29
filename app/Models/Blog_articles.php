<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_articles extends Model{

    use HasFactory;

    public $timestamps = false;

    // Table name
    protected $table = 'blog_articles';

    // Get fields
    protected $fillable = ['slug', 'title', 'category', 'short_message', 'message', 'date'];

    public function cat(){

        return $this->belongsTo(Blog_categories::class, 'category', 'id');

    }
    
}

