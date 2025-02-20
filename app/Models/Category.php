<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    protected $fillable = ['category_name'];
}
