<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use App\Models\Project;
use App\Models\Type;



class Technologies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology :: factory()
        -> count(10)
        -> make()
        -> each(function($technologies) {

        $projects = Type :: inRandomOrder() -> first();
        $technologies -> type() -> associate($projects);
    
        $technologies -> save();
    }); }
}
