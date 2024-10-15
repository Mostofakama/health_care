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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->text('qualifications');
            $table->text('expert_in');
            $table->string('organisation')->nullable();
            $table->string('email')->unique();
            $table->string('facebook_link')->nullable();
            $table->string('pinterest_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('photo')->nullable();
            $table->string('chamber_1_name')->nullable();
            $table->string('chamber_1_address')->nullable();
            $table->string('chamber_1_contact_number')->nullable();

            $table->foreignId('division_id')->constrained()->onDelete('cascade');
            $table->foreignId('district_id')->constrained()->onDelete('cascade');
            $table->foreignId('sub_district_id')->constrained()->onDelete('cascade');
            $table->foreignId('hospital_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
