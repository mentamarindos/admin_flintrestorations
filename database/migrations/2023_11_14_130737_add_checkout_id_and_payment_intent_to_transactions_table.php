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
        Schema::table('transactions', function (Blueprint $table) {
            $table->after('session_id', function (Blueprint $table) {
                $table->string('stripe_payment_intent')->nullable();
                $table->string('stripe_charge_id')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->removeColumn('stripe_payment_intent');
            $table->removeColumn('stripe_charge_id');
        });
    }
};
