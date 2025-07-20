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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('about_content');
            $table->text('journey_content');
            $table->string('hero_title')->default('About');
            $table->string('section_title')->default('Lets find home thats perfect for you');
            $table->text('section_description');
            $table->string('section_image');
            $table->string('feature1_title')->default('2M Properties');
            $table->text('feature1_description');
            $table->string('feature2_title')->default('Top Rated Agents');
            $table->text('feature2_description');
            $table->string('feature3_title')->default('Legit Properties');
            $table->text('feature3_description');
            $table->integer('buy_properties_count')->default(3298);
            $table->integer('sell_properties_count')->default(2181);
            $table->integer('all_properties_count')->default(9316);
            $table->integer('agents_count')->default(7191);
            $table->string('vision_title')->default('Our Vision');
            $table->text('vision_content');
            $table->string('mission_title')->default('Our Mission');
            $table->text('mission_content');
            $table->string('values_title')->default('Our Values');
            $table->text('values_content');
            $table->string('gallery_image1');
            $table->string('gallery_image2');
            $table->string('gallery_image3');
            $table->integer('gallery_buy_count')->default(2917);
            $table->integer('gallery_sell_count')->default(3918);
            $table->integer('gallery_all_count')->default(38928);
            $table->integer('gallery_agents_count')->default(1291);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
