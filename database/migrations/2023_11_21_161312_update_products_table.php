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
        // Schema::table('products', function (Blueprint $table) {
        //     //tạo foreign key 
        //         $table->foreignId('cate_id')
        //         ->constrained(table: 'categories', indexName: 'product_cate_id') //Nếu tham chiếu k quy ước thì tham chiếu bằng tay table: 'categories', indexName: 'product_cate_id'
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
