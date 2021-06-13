<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $limit = null;
    public function run()
    {
        //
        // $limit = env('SEEDER_LIMIT', 1);

        // $output = new \Symfony\Component\Console\Output\ConsoleOutput(2);
        // $output->writeln("Seeding number =>  $limit");
        $this->helperRun();
    }

    public function helperRun(){
            DB::table('users')->insert([
                'name' => "vicktor desrony",
                'email' => "vicktordesrony@gmail.com",
                'password' => Hash::make('123456'),
            ]);
    }
}
