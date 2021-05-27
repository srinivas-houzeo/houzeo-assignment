<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property_images extends Model
{
    public $table = 'property_images';

    public $fillable = [
        'house_id',
        'user_id',
        'img_name',
        'primary_image',
        'image_caption',
        'created_at',
        'updated_at'
    ];
}
