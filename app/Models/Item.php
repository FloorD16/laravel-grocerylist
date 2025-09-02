<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    public function category() {
    
        return $this->belongsTo(Category::class);
    }

    protected $fillable = ['name', 'description', 'category_id'];

    use HasFactory;
}
