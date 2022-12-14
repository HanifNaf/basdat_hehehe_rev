<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            ["product_id"=>uniqid(),"product_type_id"=>1, "name"=>"Veggie Delite", "price"=>25000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(),"product_type_id"=>1, "name"=>"Spicy Italian", "price"=>45000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(),"product_type_id"=>1, "name"=>"Chicken Teriyaki", "price"=>37500, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(),"product_type_id"=>1, "name"=>"Chicken Slice", "price"=>32000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(), "product_type_id" => 2, "name" => "Kopi", "price" => 3000, "quantity" => 0, "image" => "aqua.png", "updated_at" => date('Y-m-d H:i:s'), "created_at" => date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(), "product_type_id" => 2, "name" => "Aqua", "price" => 2000, "quantity" => 0, "image" => "chickslice.png", "updated_at" => date('Y-m-d H:i:s'), "created_at" => date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(), "product_type_id" => 2, "name" => "Pocari", "price" => 8000, "quantity" => 0, "image" => "chickteriyaki.png", "updated_at" => date('Y-m-d H:i:s'), "created_at" => date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(),"product_type_id"=>3,"name"=>"snack 1", "price"=>1000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(),"product_type_id"=>3,"name"=>"snack 2", "price"=>2000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(),"product_type_id"=>3,"name"=>"snack 3", "price"=>3000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["product_id"=>uniqid(),"product_type_id"=>3,"name"=>"snack 4", "price"=>4000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')]
        ];
        foreach ($menus as $menu) {
            DB::table('menu')->insert($menu);
        }
    }
}
