<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Os;
use App\Models\Status;
use App\Models\User;
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
        Os::factory(4)->create();
        Post::factory(20)->create();
        Status::factory(3)->create();

        User::factory(50)->create();
    }
}
