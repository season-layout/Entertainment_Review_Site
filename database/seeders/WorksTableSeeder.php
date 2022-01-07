<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\works;
use Illuminate\Support\Facades\DB;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("works")->insert([
            "user_id"=>"1",
            "work_name"=>"作品名",
            "work_category_id"=>"1",
        ] );
    }
}
