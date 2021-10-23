<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name', 'title', 'is_featured', 'priority', 'icon_map_maker','type', 'status'];
    public function place_type(){
        return $this->hasMany(PlaceType::class);
    }
};
