<?php

namespace Database\Seeders;

use App\Models\Aboutus;
use App\Models\Counter;
use App\Models\Social;
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
        \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'mine_dash',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
        ]);
        Social::create([
            'facebook' => 'www.facebook.com',
            'twitter' => 'www.twitter.com',
            'instagram' => 'www.instagram.com',
            'linkedin' => 'www.linkedin.com',
            'youtube' => 'www.youtube.com',
            'phone' => '11111222222',
            'email' => 'www.gmail.com',
        ]);
        Counter::create([
            'succeed' => '450',
            'branches' => '35',
            'team' => '60',
            'customers' => '250',
        ]);
        Aboutus::create([
            'who_ar' => 'who_ar',
            'who_en' => 'who_en',
            'vission_ar' => 'vission_ar',
            'vission_en' => 'vission_en',
            'mission_ar' => 'mission_ar',
            'mission_en' => 'mission_en',
            'goals_ar' => 'goals_ar',
            'goals_en' => 'goals_en',
        ]);
    }
}
