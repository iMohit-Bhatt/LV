<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::create([
            'about_content' => 'Welcome to EkanshRealty Infratech! We are a leading real estate company dedicated to creating high-quality homes and commercial spaces. Our goal is to make city living better by building vibrant and sustainable communities. Since we started, EkanshRealty Infratech has been focused on quality and innovation. We have become a trusted name in real estate by putting our customers first and delivering excellent projects. Our work shows our passion for creating places where people can live, work, and enjoy life.',
            'journey_content' => 'Since we started, EkanshRealty Infratech has been focused on quality and innovation. We have become a trusted name in real estate by putting our customers first and delivering excellent projects. Our work shows our passion for creating places where people can live, work, and enjoy life. Join us as we shape the future of real estate. Whether you\'re looking for your dream home or a great place to work, EkanshRealty Infratech is here for you. Explore our projects and see the difference that passion, innovation, and dedication can make.',
            'hero_title' => 'About',
            'section_title' => 'Let\'s find home that\'s perfect for you',
            'section_description' => 'Your vision, our expertise. Let\'s create your perfect home.',
            'section_image' => '',
            'feature1_title' => '2M Properties',
            'feature1_description' => 'Luxury redefined. Find your sanctuary with us.',
            'feature2_title' => 'Top Rated Agents',
            'feature2_description' => 'Your ideal home, simplified. Let\'s explore your options.',
            'feature3_title' => 'Legit Properties',
            'feature3_description' => 'Find your perfect home, today. Let us help you.',
            'buy_properties_count' => 3298,
            'sell_properties_count' => 2181,
            'all_properties_count' => 9316,
            'agents_count' => 7191,
            'vision_title' => 'Our Vision',
            'vision_content' => 'We want to be a top real estate developer known for our creative ideas and commitment to the environment. Our aim is to set new standards in the industry by always improving our designs, technology, and customer service.',
            'mission_title' => 'Our Mission',
            'mission_content' => 'Our mission is to provide top-quality real estate solutions that make life better for our customers. We are dedicated to building sustainable and high-quality developments that benefit the communities we serve.',
            'values_title' => 'Our Values',
            'values_content' => 'Quality: We deliver top-quality, sustainable construction with integrity and innovation, prioritizing customer needs and building lasting trust. We are committed to honesty, transparency, and exceeding expectations through environmentally conscious solutions.',
            'gallery_image1' => '',
            'gallery_image2' => '',
            'gallery_image3' => '',
            'gallery_buy_count' => 2917,
            'gallery_sell_count' => 3918,
            'gallery_all_count' => 38928,
            'gallery_agents_count' => 1291,
            'is_active' => true,
        ]);
    }
}
