<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function impressions()
    {
        return $this->hasMany(Impression::class);
    }
}
