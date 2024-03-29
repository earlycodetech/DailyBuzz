<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = [
        'name',
        'slug',
    ];
    
    protected $hidden = [
        'id'
    ];


    protected $casts = [
        'id'=> 'integer',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
        // return $this->hasMany(related: Post::class, foreignKey: 'category_id');
    }
}
