<?php

namespace Database\Seeders;

use App\Models\Biodata;
use App\Models\Category;
use App\Models\Level;
use App\Models\Medicine;
use App\Models\Record;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'username' => 'valent010',
        //     'email' => '061930801725@student.polsri.ac.id',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'username' => 'tara013',
        //     'email' => '062030801755@student.polsri.ac.id',
        //     'password' => bcrypt('123456')
        // ]);

        Category::create([
            'name' => 'Tablet',
            'slug' => 'tablet'
        ]);
        Category::create([
            'name' => 'Kapsul',
            'slug' => 'kapsul'
        ]);
        Category::create([
            'name' => 'Sirup',
            'slug' => 'sirup'
        ]);
        Category::create([
            'name' => 'Racik',
            'slug' => 'racik'
        ]);

        Level::create([
            'name' => 'Admin',
            'slug' => 'admin'
        ]);
        Level::create([
            'name' => 'Dokter',
            'slug' => 'dokter'
        ]);
        Level::create([
            'name' => 'Farmasi',
            'slug' => 'farmasi'
        ]);
        Level::create([
            'name' => 'Pasien',
            'slug' => 'pasien'
        ]);
        Level::create([
            'name' => 'Kasi',
            'slug' => 'kasi'
        ]);

        User::factory(50)->create();
        Biodata::factory(50)->create();
        Category::factory(5)->create();
        Medicine::factory(50)->create();
        Record::factory(100)->create();
    }
}
