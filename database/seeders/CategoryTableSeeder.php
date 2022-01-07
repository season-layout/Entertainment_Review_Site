<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
            [
                "id"=>"1",
                "name"=>"映画",
            ],
            [
                "id"=>"2",
                "name"=>"小説",
            ],
            [
                "id"=>"3",
                "name"=>"音楽",
            ]
        ]);
    }
}
