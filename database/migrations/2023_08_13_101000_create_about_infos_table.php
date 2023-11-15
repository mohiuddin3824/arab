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
        Schema::create('about_infos', function (Blueprint $table) {
            $table->id();
            $table->string('section_one_title')->default('title text');
            $table->longText('section_one_desc')->default('description text');
            $table->string('section_one_btn_text')->default('become a member');
            $table->string('section_one_btn_link')->default('#');
            $table->string('section_one_img')->default('frontend/assets/images/pages/page-bg.jpg');
            $table->longText('vision_title')->default('vison and mision title');
            $table->longText('vision')->default('vison and mision text');
            $table->string('serve_sec_title')->default('we believe to help more people');
            $table->string('serve_icon_one')->default('fa-solid fa-cloud-showers-water');
            $table->string('serve_title_one')->default('Water');
            $table->string('serve_desc_one')->default('short description');
            $table->string('serve_icon_two')->default('fa-solid fa-stethoscope');
            $table->string('serve_title_two')->default('Medical');
            $table->string('serve_desc_two')->default('short description');
            $table->string('serve_icon_three')->default('fa-solid fa-burger');
            $table->string('serve_title_three')->default('Food');
            $table->string('serve_desc_three')->default('short description');
            $table->string('serve_icon_four')->default('fa-solid fa-book-open-reader');
            $table->string('serve_title_four')->default('Education');
            $table->string('serve_desc_four')->default('short description');
            $table->string('activities_title')->default('Our Activities');
            $table->longText('activities_description')->default('description will be here');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_infos');
    }
};
