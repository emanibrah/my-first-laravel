<?php

namespace App\Models;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'tage',
    
        ];

        public function posts()
        {
            return $this->belongsToMany(Post::class);
        }   
}
 