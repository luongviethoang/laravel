<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('books')->insert([
            [   'authorid' => 1,
                'title' => 'Doraemon',
                'ISBN' => 'quisddh',
                'pub_year' => 1999,
                'available' => 40
            ],
            [
                'authorid' => 2,
                'title' => 'Nobita',
                'ISBN' => 'nbtjadha',
                'pub_year' => 2000,
                'available' => 50
            ],
            [
                'authorid' => 3,
                'title' => 'Shizuka',
                'ISBN' => 'szksdhghs',
                'pub_year' => 2001,
                'available' => 60
            ],
            [
                'authorid' => 4,
                'title' => 'Deki',
                'ISBN' => 'dkcbhavc',
                'pub_year' => 2002,
                'available' => 70
            ],
            [
                'authorid' => 5,
                'title' => 'Jaien',
                'ISBN' => 'jecbhavf',
                'pub_year' => 2003,
                'available' => 80
            ],
            [
                'authorid' => 6,
                'title' => 'Suneo',
                'ISBN' => 'snochsvs',
                'pub_year' => 2004,
                'available' => 90
            ],
            [
                'authorid' => 7,
                'title' => 'Doraemi',
                'ISBN' => 'drmgfuygs',
                'pub_year' => 2005,
                'available' => 100
            ],
            [
                'authorid' => 8,
                'title' => 'Jaiko',
                'ISBN' => 'jkcbhsdg',
                'pub_year' => 2006,
                'available' => 110
            ]
        ]);
    }
}
