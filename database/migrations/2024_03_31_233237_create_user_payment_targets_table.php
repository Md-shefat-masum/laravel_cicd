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
        Schema::create('user_payment_targets', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->enum('type', ['monthly', 'onetime'])->nullable();
            $table->integer('amount')->unsigned()->nullable();
            $table->integer('interval')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_payment_targets');
    }
};
