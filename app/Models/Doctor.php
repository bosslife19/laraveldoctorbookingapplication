<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $fillable = ['name'];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
