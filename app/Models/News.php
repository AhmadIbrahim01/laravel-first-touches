<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ["title", "content", "attachment", "age_restriction", "admin_id"];

}
