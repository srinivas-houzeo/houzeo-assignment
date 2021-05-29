<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBasicDetails extends Model
{
    public $fillable = [
        'full_name',
        'phone_number',
        'email',
        'dob',
    ];
}
