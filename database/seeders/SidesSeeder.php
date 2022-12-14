<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sides = [
            ["unique_id"=>uniqid(),"product_type_id"=>3,"name"=>"snack 1", "price"=>1000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["unique_id"=>uniqid(),"product_type_id"=>3,"name"=>"snack 2", "price"=>2000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["unique_id"=>uniqid(),"product_type_id"=>3,"name"=>"snack 3", "price"=>3000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["unique_id"=>uniqid(),"product_type_id"=>3,"name"=>"snack 4", "price"=>4000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')]
        ];
        
        foreach($sides as $side){
            DB::table('sides')->insert($side);
        }
    }
}
