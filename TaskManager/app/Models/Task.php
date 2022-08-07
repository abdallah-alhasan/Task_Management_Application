<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public function scopeFilter($query , array $filters){
        if($filters['search'] ?? false){
            $query->where('title' , 'like' , '%' . request('search') . '%');
        }
    }

    protected $fillable = ['title', 'description', 'image'];
    use HasFactory;
}
