<?php

use Illuminate\Database\Seeder;

class Tag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tag::Class,5)->create();
    }
}
