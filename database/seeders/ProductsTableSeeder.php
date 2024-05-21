<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed sample of product data
        DB::table('products')->insert([
            [
                'Name'=>'infinx',
                'price'=>'5500',
                'Quantity'=>'5',
            ],
            [
                'Name'=>'lenovo Laptop',
                'price'=>'100000',
                'Quantity'=>'9',
            ],
            [
                'Name'=>'samsung LCD',
                'price'=>'15000',
                'Quantity'=>'3',
            ],

        ]);

}
}
