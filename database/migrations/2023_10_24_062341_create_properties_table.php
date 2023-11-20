<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('overview');
            $table->string('price'); //Property price
            $table->string('price_per_square_foot'); //Price per square foot
            $table->string('minimum_investment_price'); //Minumum price a user can invest in property
            $table->string('transaction_fee'); //Transaction costs
            $table->string('site_fee'); //ShareHolder's fee
            $table->json('features');
            $table->foreignId('country_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->string('gross_rent'); //Annual gross rent
            $table->string('service_charges'); //Service charges
            $table->string('other_charges'); //Mgmt. and maintenance
            $table->string('annual_return'); //Annualised return in %
            $table->string('annual_appreciation'); //Annual appreciation in %
            $table->string('gross_yield'); //Projected gross yield in %
            $table->string('net_yield'); //Projected net yield in %
            $table->string('location');
            $table->text('location_note')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('status');
            $table->string('current_rent')->nullable(); //Current rent if category is rented
            $table->date('closing_date');
            $table->date('spv_date');
            $table->date('rental_payment_date');
            $table->boolean('show')->default(true); //Show or Hide property on website
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
