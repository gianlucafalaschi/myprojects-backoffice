<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology; // importo il model Technology
use Illuminate\Support\Str; // per usare slug

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['css','js', 'vue', 'sql', 'php', 'laravel'];
        
        foreach ($technologies as $technologyName) {
            $newTechnology = new Technology();
            $newTechnology->name =  $technologyName;
            $newTechnology->slug = Str::slug($newTechnology->name, '-');
            $newTechnology->save();

        }

    }
}
