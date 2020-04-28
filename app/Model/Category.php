<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
     use SoftDeletes;
    protected $table = "categories";
    protected $fillable = [
        'name', 'id_category', 'price', 'description', 'thumb_url', 'created_at', 'updated_at', 'deleted_at'
    ];
}
