<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        $this->call(users::class);
        $this->call(categories::class);

        Model::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
