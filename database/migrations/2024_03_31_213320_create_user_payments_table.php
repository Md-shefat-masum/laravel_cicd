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
        Schema::create('user_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->integer('target')->unsigned()->nullable();
            $table->integer('amount')->unsigned()->nullable();
            $table->text('amount_in_text')->nullable();
            $table->date('date')->nullable();
            $table->enum('payment_type',['addmission','monthly','onetime']);
            $table->enum('approved',['approved','pending','not approved'])->default('pending');
            $table->string('attachment',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_payments');
    }
};
