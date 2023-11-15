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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('footer_widget_one_title')->default('About Us');
            $table->string('footer_logo')->default('frontend/assets/images/logo/footer-logo.png');
            $table->longText('footer_about_desc')->default('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor maiores enim, tempora minus dignissimos earum quia aliquid vitae ipsa, odit blanditiis placeat dolorem neque explicabo sunt voluptatem ea repellendus?');
            $table->string('footer_widget_two_title')->default('important Links');
            $table->string('footer_important_link1_text')->default('important link title one');
            $table->string('footer_important_link1')->default('https://webservice24.org');
            $table->string('footer_important_link2_text')->default('important link title two');
            $table->string('footer_important_link2')->default('https://facebook.com/mwtbd');
            $table->string('footer_important_link3_text')->default('important link title three');
            $table->string('footer_important_link3')->default('https://twitter.com');
            $table->string('footer_important_link4_text')->default('important link title Four');
            $table->string('footer_important_link4')->default('https://instagram.com');
            $table->string('footer_important_link5_text')->default('important link title Five');
            $table->string('footer_important_link5')->default('https://anusandhan.news');
            $table->string('footer_widget_three_title')->default('HAVE A QUESTION?');
            $table->string('footer_address')->default('farmview super market, farmgate, dhaka');
            $table->string('footer_phone')->default('01831332732');
            $table->string('footer_email')->default('admin@admin.com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
