<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('music', function (Blueprint $table) {
        $table->id();
        $table->string('name')->nullable();
        $table->string('songName')->nullable();
        $table->string('artist')->nullable();
        $table->string('cover')->nullable();        
        $table->rememberToken();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
