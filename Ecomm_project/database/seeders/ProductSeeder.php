<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "category"=>"tv",
                "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg",
                "discription"=>"A smart tv with much more feature"
                
            ],
            [
                'name'=>'Soni Tv',
                'price'=>'500',
                'category'=>'tv',
                "gallery"=>'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png',
                "discription"=>'A tv with much more feature'
            ],
            [
                'name'=>'LG fridge',
                'price'=>'200',
                'category'=>'fridge',
                "gallery"=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU',
                "discription"=>'A fridge with much more feature'
            ]
            ]); 
    }
}
    