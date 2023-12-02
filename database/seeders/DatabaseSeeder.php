<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
           
        //     'phone' => '0123456789',
        //     'email' => 'test@example.com',
        //     'address' => 'HCM',
        //     'password' =>Hash::make('123456'),
        //     'pwd2' =>'123456',
        //     'name' =>'test',
        //     'active' =>'1',
        // ]);

        \App\Models\Product::factory()->create([
           
            'name_product' => 'Quần Jean Nam Ống Suông Trơn Form Straight Cropped',
            'price' => '589000',
            'quantity' => '5',
            'size' =>'S,M,L,XL',
            'color' =>'black,white',
            'cate_id' =>'4',
            'quantity_sold' => 1
        ]);
        
    }
}
