<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description", 
        "view_link", 	
        "from" ,
        "to" ,
        "current",
        "user_id" ,
        "created_at" ,
        "updated_at"
    ];
}
