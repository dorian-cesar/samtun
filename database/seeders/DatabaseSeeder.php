<?php

namespace Database\Seeders;

use App\Models\producto;
use App\Models\User;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

      //  $this->call(Productoseeder::class);

      Producto::factory(50)->create();
      User::factory(50)->create();


    }
}
