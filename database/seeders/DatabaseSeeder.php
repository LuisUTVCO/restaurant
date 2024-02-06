<?php

use Database\Seeders\FullSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FullSeeder::class);
        //$this->call(TransactionRoomSeeder::class);
        $this->call(UserSeeder::class);        			
    }
}
