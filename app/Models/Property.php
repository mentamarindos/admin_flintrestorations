<?php

namespace App\Models;

use App\Enums\PropertyStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'overview', 'price', 'price_per_square_foot', 'minimum_investment_price', 'transaction_fee', 'site_fee', 'features', 'country_id', 'city_id', 'category_id', 'gross_rent', 'service_charges', 'other_charges', 'annual_return', 'annual_appreciation', 'gross_yield', 'net_yield', 'location', 'location_note', 'latitude', 'longitude', 'status', 'current_rent', 'show', 'closing_date', 'spv_date', 'rental_payment_date'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'integer',
        'price_per_square_foot' => 'integer',
        'minimum_investment_price' => 'integer',
        'transaction_fee' => 'integer',
        'features' => 'array',
        'gross_rent' => 'integer',
        'service_charges' => 'integer',
        'other_charges' => 'integer',
        'current_rent' => 'integer',
        'status' => PropertyStatus::class,
        'closing_date' => 'date',
        'spv_date' => 'date',
        'rental_payment_date' => 'date',
    ];

    /**
     * Get the country.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the city.
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get the category.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class);
    }

    /**
     * Get all investments in property.
     */
    public function investments(): HasMany
    {
        return $this->hasMany(Investment::class)->latest();
    }

    /**
     * Get all of the images.
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * The amenities that belong to the property.
     */
    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }
}
