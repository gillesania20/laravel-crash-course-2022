<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'location',
        'website',
        'email',
        'description',
        'tags',
        'logo'
    ];
    
    public function scopeFilter($query, array $filters){
        if($filters['tag'] !== null && gettype($filters['tag']) === 'string'){
            $query->where('tags', 'like' , '%' . request('tag') . '%');
        }else if($filters['search'] !== null && gettype($filters['search']) === 'string'){
            $query
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
