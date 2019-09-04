<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Students::class,100)->create();
        factory(App\Subjects::class,100)->create();
        factory(App\Students_Subjects::class,100)->create();
    }
}
