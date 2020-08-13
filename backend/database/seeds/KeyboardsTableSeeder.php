<?php

use Illuminate\Database\Seeder;

class KeyboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Keyboard::class, 20)->create();
    }
}
