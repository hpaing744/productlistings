<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trouser extends Model
{
    use HasFactory;
    protected $fillable=['name','company','colors','description','email','logo','sizes'];

    public function scopeFilter($query,array $filters){
        if($filters['color'] ?? false){
            $query->where('colors','like','%'. request('color') .'%');
        }
        if($filters['search'] ?? false){
            $query->where('company','like','%'. request('search') .'%')
                ->orWhere('description','like','%'. request('search') .'%')
                ->orWhere('colors','like','%'. request('search') .'%')
                ->orWhere('name','like','%'. request('search') .'%');
        }
        if($filters['size'] ?? false){
            $query->where('sizes','like','%'. request('size') .'%');
        }
    }
}
