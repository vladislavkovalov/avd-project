<?php

use App\Param;
use Illuminate\Database\Seeder;

class ParamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('params')->delete();

        Param::create([
            'is_available' => false,
            'is_lazy' => false,
        ]);
    }
}
