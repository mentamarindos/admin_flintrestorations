<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'starting', 'cashback', 'referral_reward', 'specifications'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'starting' => 'integer',
        'cashback' => 'integer',
        'referral_reward' => 'integer',
        'specifications' => 'array',
    ];
}
