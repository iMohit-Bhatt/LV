<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MainPage;

class MainPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MainPage::create([
            'hero_title' => 'Easiest way to find your dream home',
            'hero_subtitle' => 'Discover your perfect property with EkanshRealtyy',
            'hero_search_placeholder' => 'Search Here for properties',
            'about_title' => 'About Us',
            'about_content' => 'At EkanshRealty, our mission is to guide customers toward making the RIGHT property investments with complete transparency and zero hassle. We collaborate exclusively with a select group of top-tier real estate developers known for their exceptional quality and timely project delivery.',
            'about_journey_content' => 'Every property we recommend meets rigorous standards for legal compliance, offer integrity, and developer reliability. In fact, we endorse only the properties where we\'d confidently invest our own money.',
            'features_title' => 'What Makes Us Better',
            'features_subtitle' => 'Strategic investment begins with thorough research and risk evaluation. We prioritize long-term growth and absolute returns, guiding you to projects that secure your financial future',
            'feature1_title' => 'Expertise',
            'feature1_description' => 'Your Trusted Real Estate Experts. EkanshRealty\'s experienced team provides the knowledge and guidance you need to make confident investment decisions, securing your ideal property.',
            'feature1_icon' => 'flaticon-house',
            'feature2_title' => 'Assistance',
            'feature2_description' => 'Your Exceptional Journey. At EkanshRealty, we\'re dedicated to providing a seamless and supportive experience, from expert guidance to comprehensive after-sales assistance, ensuring your complete satisfaction.',
            'feature2_icon' => 'flaticon-building',
            'feature3_title' => 'Trust',
            'feature3_description' => 'Our Clients, Our Most Valued Asset. We prioritize building strong, collaborative relationships, delivering exceptional experiences that foster trust and long-term satisfaction.',
            'feature3_icon' => 'flaticon-house-3',
            'feature4_title' => 'Rera',
            'feature4_description' => 'Secure Your Future with RERA Assurance. EkanshRealty\'s RERA registration provides you with the confidence and security you need for wise real estate investments.',
            'feature4_icon' => 'flaticon-house-1',
            'services_title' => 'Our Services',
            'service1_title' => 'Buy',
            'service1_description' => 'Find Your Perfect Home with EkanshRealty. We simplify the buying process, providing expert guidance and a seamless experience every step of the way.',
            'service1_icon' => 'flaticon-building',
            'service2_title' => 'Sell',
            'service2_description' => 'Sell Your Property with Confidence. EkanshRealty\'s expert team leverages market knowledge to ensure a hassle-free and rewarding selling experience.',
            'service2_icon' => 'flaticon-house-3',
            'service3_title' => 'Lease',
            'service3_description' => 'Seamless Leasing Solutions. EkanshRealty simplifies residential, commercial, and industrial leasing, providing expert support for landlords and tenants.',
            'service3_icon' => 'flaticon-house-1',
            'find_home_title' => 'Let\'s find home that\'s perfect for you',
            'find_home_description' => 'Your vision, our expertise. Let\'s create your perfect home.',
            'find_home_feature1_title' => '2M Properties',
            'find_home_feature1_description' => 'Luxury redefined. Find your sanctuary with us.',
            'find_home_feature2_title' => 'Top Rated Agents',
            'find_home_feature2_description' => 'Your ideal home, simplified. Let\'s explore your options.',
            'find_home_feature3_title' => 'Legit Properties',
            'find_home_feature3_description' => 'Find your perfect home, today. Let us help you.',
            'buy_properties_count' => 3298,
            'sell_properties_count' => 2181,
            'all_properties_count' => 9316,
            'agents_count' => 7191,
            'is_active' => true,
        ]);
    }
}
