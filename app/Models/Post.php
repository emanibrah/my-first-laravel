<?php

namespace App\Models;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'text',
        'email',
        'website',
        ];
        public function tages()
        {
            return $this->belongsToMany(Tag::class);
        }   

}
