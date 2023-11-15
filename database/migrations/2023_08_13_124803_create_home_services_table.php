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
        Schema::create('home_services', function (Blueprint $table) {
            $table->id();
            $table->string('serve_sec_title')->default('Our Services');
            $table->string('serve_icon_one')->default('fa-solid fa-cloud-showers-water');
            $table->string('serve_title_one')->default('Water');
            $table->text('serve_desc_one')->default('short description');
            $table->string('serve_btn_one_txt')->default('Read More');
            $table->string('serve_btn_one_link')->default('#');
            $table->string('serve_icon_two')->default('fa-solid fa-stethoscope');
            $table->string('serve_title_two')->default('Medical');
            $table->text('serve_desc_two')->default('short description');
            $table->string('serve_btn_two_txt')->default('Read More');
            $table->string('serve_btn_two_link')->default('#');
            $table->string('serve_icon_three')->default('fa-solid fa-burger');
            $table->string('serve_title_three')->default('Food');
            $table->text('serve_desc_three')->default('short description');
            $table->string('serve_btn_three_txt')->default('Read More');
            $table->string('serve_btn_three_link')->default('#');
            $table->string('serve_icon_four')->default('fa-solid fa-book-open-reader');
            $table->string('serve_title_four')->default('Education');
            $table->text('serve_desc_four')->default('short description');
            $table->string('serve_btn_four_txt')->default('Read More');
            $table->string('serve_btn_four_link')->default('#');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_services');
    }
};
