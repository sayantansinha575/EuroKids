<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
            'parent_name',
            'parent_image',
            'child_name',
            'location',
            'message',
            'is_active'
    ];
}
