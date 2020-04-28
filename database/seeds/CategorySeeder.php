<?php

use Illuminate\Database\Seeder;
use App\Model\Category as ct;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ct::create(['name' => 'tecnologia']);
        ct::create(['name' => 'escritorio']);
        ct::create(['name' => 'perifericos']);


    }
}
