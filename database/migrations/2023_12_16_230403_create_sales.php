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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_seller')->nullable();
            $table->float('sales',8,2);
            $table->unsignedBigInteger('cart_id')->nullable();
            $table->timestamp('sales_date')->useCurrent();

            $table->foreign('cart_id')->references('id')->on('carts')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('User_seller')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
