<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_categories extends Model{

    use HasFactory;

    public $timestamps = false;

    # Table name
    protected $table = 'blog_categories';

    # Get fields
    protected $fillable = ['name', 'slug'];

}
