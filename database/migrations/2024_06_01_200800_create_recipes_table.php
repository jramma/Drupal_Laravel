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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('publication_date');
            $table->enum('difficulty', ['bajo', 'medio', 'alto']);
            $table->unsignedBigInteger('category_id');
            $table->integer('preparation_time');
            $table->text('ingredients');
            $table->string('author');
            $table->text('instructions');
            $table->string('image_path');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }


};
