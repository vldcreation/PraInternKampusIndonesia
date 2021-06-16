<?php

use Illuminate\Database\Seeder;

class CampusLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('campus_locations')->insert([
            'location_name' => 'Malang'
        ]);
    }
}
