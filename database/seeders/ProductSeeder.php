<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                'price'=>'300',
                'description'=>'A smatrphone with 4gb ram and special song from Anelia pre-insatlled',
                'category'=>'phone',
                'gallery'=>'https://balkanandroid.com/wp-content/uploads/2020/12/oppo-x-nendo.jpg',
        
            ],
            [   'name'=>'Xiaomi',
                'price'=>'350',
                'description'=>'A tv with 4gb ram and special song from Anelia pre-insatlled',
                'category'=>'TV',
                'gallery'=>'https://mi-srbija.rs/storage/product/images/cf/d0/mi-led-tv-4s-55-eu-358.png',
            ],
            [
                'name'=>'Apple watch',
                'price'=>'500',
                'description'=>'Just a watch',
                'category'=>'watch',
                'gallery'=>'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/42-alu-silver-sport-white-nc-s3-grid?wid=540&hei=550&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1594259786000',
        
            ]
            
        ]);
    }
}
