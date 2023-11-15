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
        Schema::create('site_identites', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('Arab Builders');
            $table->string('site_tag_line')->default('We are trusted');
            $table->string('site_logo')->default('frontend/assets/images/logo/logo.png');
            $table->string('site_fav')->default('frontend/assets/images/logo/icon.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_identites');
    }
};
