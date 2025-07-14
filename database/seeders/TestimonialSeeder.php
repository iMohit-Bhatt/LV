<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'James Smith',
                'position' => 'Property Investor',
                'testimonial' => 'EkanshRealty helped me find the perfect investment property. Their expertise and transparent approach made the entire process smooth and hassle-free. Highly recommended!',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Mike Houston',
                'position' => 'Business Owner',
                'testimonial' => 'The team at EkanshRealty is professional and trustworthy. They guided me through every step of purchasing my commercial property with complete transparency.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Cameron Webster',
                'position' => 'Residential Buyer',
                'testimonial' => 'I was impressed by their knowledge of the market and their commitment to finding the right property for my family. The entire experience was exceptional.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'name' => 'Dave Smith',
                'position' => 'Real Estate Developer',
                'testimonial' => 'Working with EkanshRealty has been a pleasure. Their understanding of market trends and investment opportunities is outstanding. They truly prioritize client satisfaction.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'First-time Buyer',
                'testimonial' => 'As a first-time buyer, I was nervous about the process. EkanshRealty made everything so easy and explained every step clearly. I couldn\'t be happier with my new home!',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'name' => 'Robert Chen',
                'position' => 'Property Seller',
                'testimonial' => 'Selling my property through EkanshRealty was a great decision. They marketed it effectively and got me the best possible price. Professional service throughout.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 6
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
