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
        Schema::create('payement_notifs', function (Blueprint $table) {
            $table->id();
            $table->string('payment_mode');
            $table->string('paid_sum');
            $table->string('paid_amount');
            $table->string('payment_token');
            $table->string('payment_status');
            $table->string('command_number');
            $table->string('payment_validation_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payement_notifs');
    }
};
