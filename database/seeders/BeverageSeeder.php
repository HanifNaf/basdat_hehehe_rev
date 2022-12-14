<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $beverage = [
            ["unique_id"=>uniqid(),"product_type_id"=>2,"name"=>"Kopi", "price"=>3000, "quantity"=>0, "image"=>"aqua.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["unique_id"=>uniqid(),"product_type_id"=>2,"name"=>"Aqua", "price"=>2000, "quantity"=>0, "image"=>"chickslice.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["unique_id"=>uniqid(),"product_type_id"=>2,"name"=>"Pocari", "price"=>8000, "quantity"=>0, "image"=>"chickteriyaki.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')]


        ];
        foreach($beverage as $bev){
            DB::table('beverage')->insert($bev);
        }
    }
}
