<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Template;
class templateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::create([
            'name'=>'template 1',
            'description'=>'template 1',
            'image'=>'thumb.jpg',
            'category'=>1
        ]);
    }
}
