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
        
            Schema::create('products', function (Blueprint $table) {
                $table->id();
           
                //tạo foreign key 
                // $table->foreignId('cate_id')
                // ->constrained(table: 'categories', indexName: 'product_cate_id') //Nếu tham chiếu k quy ước thì tham chiếu bằng tay table: 'categories', indexName: 'product_cate_id'
                // ->onUpdate('cascade')
                // ->onDelete('cascade');
                $table->string('name_product',200);
                $table->float('price')->unique();//tạo index
                $table->integer('quantity');
                $table->text('size');
                $table->text('color');
                $table->timestamps();
            });
        
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
