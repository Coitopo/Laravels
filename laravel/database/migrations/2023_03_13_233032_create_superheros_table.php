<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('superheros', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('real_name');
            $table->string('gender');
            $table->integer('universe_id');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('superheros');
    }
};
