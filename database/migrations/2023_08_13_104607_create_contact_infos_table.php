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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->text('title')->default('Visit Our Office');
            $table->text('location')->default('89,90 green road, farmgate, dhaka-1215');
            $table->text('email')->default('info@0608sns.org');
            $table->text('phone')->default('01831332732');
            $table->text('gmap')->default('google map embade code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_infos');
    }
};
