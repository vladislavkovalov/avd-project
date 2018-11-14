<?php

use App\Slot;
use Illuminate\Database\Seeder;

class SlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slots')->delete();

        Slot::create([
            'slot_name' => '/6355419/Travel/Europe/France/Paris',
            'slot_element_id' => 'banner1',
            'slot_sizes' => '[300, 250]',
        ]);
    }
}
