<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'feedback', 'stars', 'image', 'feedback_date', 'show'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'feedback_date' => 'date',
        // 'show' => 'boolean',
    ];

    public function getPhotoAttribute()
    {
        return asset($this->image);
    }
}
