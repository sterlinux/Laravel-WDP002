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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string("artist");
            $table->string("song");
            $table->string("emotion");
            $table->double("variance");
            $table->string("genre");
            $table->integer("release_date");
            $table->string("key");
            $table->integer("tempo");
            $table->decimal("loudness",8,2);
            $table->boolean("explicit");
            $table->integer("popularity");
            $table->integer("energy");
            $table->integer("danceability");
            $table->integer("positiveness");
            $table->integer("speechiness");
            $table->integer("liveness");
            $table->integer("scousticness");
            $table->integer("instrumentalness");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
