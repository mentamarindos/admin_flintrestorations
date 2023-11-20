<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['property_id', 'filename'];


    /**
     * Get the property.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function getFileAttribute()
    {
        return asset($this->filename);
    }
}
