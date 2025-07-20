<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('main_pages', function (Blueprint $table) {
            $table->id();
            
            // Hero Section
            $table->string('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->string('hero_search_placeholder')->nullable();
            
            // About Us Section
            $table->text('about_title')->nullable();
            $table->text('about_content')->nullable();
            $table->text('about_journey_content')->nullable();
            $table->string('about_image')->nullable();
            
            // Features Section
            $table->string('features_title')->nullable();
            $table->text('features_subtitle')->nullable();
            
            // Feature 1
            $table->string('feature1_title')->nullable();
            $table->text('feature1_description')->nullable();
            $table->string('feature1_icon')->nullable();
            
            // Feature 2
            $table->string('feature2_title')->nullable();
            $table->text('feature2_description')->nullable();
            $table->string('feature2_icon')->nullable();
            
            // Feature 3
            $table->string('feature3_title')->nullable();
            $table->text('feature3_description')->nullable();
            $table->string('feature3_icon')->nullable();
            
            // Feature 4
            $table->string('feature4_title')->nullable();
            $table->text('feature4_description')->nullable();
            $table->string('feature4_icon')->nullable();
            
            // Services Section
            $table->string('services_title')->nullable();
            
            // Service 1
            $table->string('service1_title')->nullable();
            $table->text('service1_description')->nullable();
            $table->string('service1_icon')->nullable();
            
            // Service 2
            $table->string('service2_title')->nullable();
            $table->text('service2_description')->nullable();
            $table->string('service2_icon')->nullable();
            
            // Service 3
            $table->string('service3_title')->nullable();
            $table->text('service3_description')->nullable();
            $table->string('service3_icon')->nullable();
            
            // "Let's Find Home" Section
            $table->string('find_home_title')->nullable();
            $table->text('find_home_description')->nullable();
            $table->string('find_home_image')->nullable();
            
            // Find Home Features
            $table->string('find_home_feature1_title')->nullable();
            $table->text('find_home_feature1_description')->nullable();
            $table->string('find_home_feature2_title')->nullable();
            $table->text('find_home_feature2_description')->nullable();
            $table->string('find_home_feature3_title')->nullable();
            $table->text('find_home_feature3_description')->nullable();
            
            // Counters
            $table->integer('buy_properties_count')->default(3298);
            $table->integer('sell_properties_count')->default(2181);
            $table->integer('all_properties_count')->default(9316);
            $table->integer('agents_count')->default(7191);
            
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_pages');
    }
};
