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
        Schema::create('header_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('top_mobile_text')->default('Call Us');
            $table->string('top_mobile_no')->default('01831-332732');
            $table->string('top_email_text')->default('Mail Us');
            $table->string('top_email')->default('admin@admin.com');
            $table->string('top_open_text')->default('We Are Open');
            $table->string('top_open_time')->default('Sun-thru 9AM to 9PM');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_contacts');
    }
};
