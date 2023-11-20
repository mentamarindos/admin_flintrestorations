<?php

namespace App\Livewire\Forms;

use App\Enums\PropertyStatus;
use App\Models\Property;
use Illuminate\Validation\Rules\Enum;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PropertyForm extends Form
{
    public ?Property $property;

    #[Rule('required|string|max:255')]
    public $name = '';
    #[Rule('required|string')]
    public $overview = '';
    #[Rule('required|numeric')]
    public $price = '';
    #[Rule('required|numeric')]
    public $price_per_square_foot = '';
    #[Rule('required|numeric')]
    public $minimum_investment_price = '';
    #[Rule('required|numeric')]
    public $transaction_fee = '';
    #[Rule('required|numeric')]
    public $site_fee = '';
    #[Rule('required|array')]
    public $features = [];
    #[Rule('required|numeric')]
    public $country_id = '';
    #[Rule('required|numeric')]
    public $city_id = '';
    #[Rule('nullable|numeric')]
    public $category_id = '';
    #[Rule('required|numeric')]
    public $gross_rent = '';
    #[Rule('required|numeric')]
    public $service_charges = '';
    #[Rule('required|numeric')]
    public $other_charges = '';
    #[Rule('required|numeric')]
    public $annual_return = '';
    #[Rule('required|numeric')]
    public $annual_appreciation = '';
    #[Rule('required|numeric')]
    public $gross_yield = '';
    #[Rule('required|numeric')]
    public $net_yield = '';
    #[Rule('required|string|max:255')]
    public $location = '';
    #[Rule('required|string')]
    public $location_note = '';
    #[Rule('required|numeric')]
    public $latitude = '';
    #[Rule('required|numeric')]
    public $longitude = '';
    #[Rule('required')]
    public $status = '';
    #[Rule('nullable|numeric')]
    public $current_rent = '';
    #[Rule('required|in:0,1')]
    public $show = '';
    #[Rule('required|date')]
    public $closing_date = '';
    #[Rule('required|date')]
    public $spv_date = '';
    #[Rule('required|date')]
    public $rental_payment_date = '';

    public function setProperty(Property $property)
    {
        $this->property = $property;
        $this->name = $this->property->name;
        $this->overview = $this->property->overview;
        $this->price = $this->property->price;
        $this->price = $this->property->price;
        $this->price_per_square_foot = $this->property->price_per_square_foot;
        $this->minimum_investment_price = $this->property->minimum_investment_price;
        $this->transaction_fee = $this->property->transaction_fee;
        $this->site_fee = $this->property->site_fee;
        $this->features = $this->property->features;
        $this->country_id = $this->property->country_id;
        $this->city_id = $this->property->city_id;
        $this->category_id = $this->property->category_id;
        $this->gross_rent = $this->property->gross_rent;
        $this->service_charges = $this->property->service_charges;
        $this->other_charges = $this->property->other_charges;
        $this->annual_return = $this->property->annual_return;
        $this->annual_appreciation = $this->property->annual_appreciation;
        $this->gross_yield = $this->property->gross_yield;
        $this->net_yield = $this->property->net_yield;
        $this->location = $this->property->location;
        $this->location_note = $this->property->location_note;
        $this->latitude = $this->property->latitude;
        $this->longitude = $this->property->longitude;
        $this->status = $this->property->status;
        $this->current_rent = $this->property->current_rent;
        $this->closing_date = $this->property->closing_date->format('Y-m-d');
        $this->spv_date = $this->property->spv_date->format('Y-m-d');
        $this->rental_payment_date = $this->property->rental_payment_date->format('Y-m-d');
        $this->show = $this->property->show;
    }
}
