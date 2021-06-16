    1<?php

use Illuminate\Database\Seeder;

class CampusDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('campus_details')->insert([
            'nama' => 'Universitas Brawijaya',
            'path_logo' => 'logo1.jpg',
            'path_background' => 'background1.jpg',
            'akreditasi' => 'A',
            'jenis' => 'Negeri',
            'lokasi' => 2,
            'deskripsi' => 'Contoh Deskrips aja'
        ]);
    }
}
