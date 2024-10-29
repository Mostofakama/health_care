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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id(); $table->string('name');
            $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade');
            $table->foreignId('district_id')->constrained('districts')->onDelete('cascade');
            $table->foreignId('subdistrict_id')->constrained('sub_districts')->onDelete('cascade');
            $table->string('contact_number', 20)->nullable();
            $table->string('email')->nullable();
            $table->string('type')->nullable();

            $table->string('address')->nullable();
            $table->string('type_pharmacies')->nullable();
            $table->string('status')->default(1);


            $table->string('license_number')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
