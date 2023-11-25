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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
         
            $table->foreignId('user_id')
            ->constrained(table: 'users', indexName: 'cart_user_id')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignId('product_id')
            ->constrained(table: 'products', indexName: 'cart_product_id')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->integer('quantity');
            $table->float('total');
            $table->text('datepay');
            $table->text('coupon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
