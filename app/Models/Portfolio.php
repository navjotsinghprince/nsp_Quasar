<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        "portfolio_category_id",
        "title", 
        "visit_link", 	
        "image",
        "user_id" ,
        "created_at" ,
        "updated_at"
    ];
}
