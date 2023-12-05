<?php

use App\Models\Agency;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->timestamps();
        });

        Agency::create([
            'name' => "Gizi", 
            'country' => 'Ohio', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "Józsi", 
            'country' => 'Bp', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "Szilikon", 
            'country' => 'Ohio', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "Thor", 
            'country' => 'Ohio', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "Gabi", 
            'country' => 'Bp', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "András", 
            'country' => 'Bp', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "Peti", 
            'country' => 'Ohio', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "Karappa", 
            'country' => 'Ohio', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "Marci", 
            'country' => 'Bp', 
            'type' => 'nagy'
        ]);

        Agency::create([
            'name' => "Me", 
            'country' => 'Bp', 
            'type' => 'nagy'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
