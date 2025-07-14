<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'address' => 'C-133 Sector 65 Noida, Uttar Pradesh 201308',
            'phone' => '+91 9958329269',
            'email' => 'info@ekanshrealty.com',
            'instagram_url' => '#',
            'twitter_url' => '#',
            'facebook_url' => '#',
            'linkedin_url' => '#',
            'pinterest_url' => '#',
            'dribbble_url' => '#',
            'copyright_text' => 'Copyright &copy; ' . date('Y') . '. All Rights Reserved. &mdash; by ekanshrealty.com',
            'is_active' => true,
        ]);
    }
}
