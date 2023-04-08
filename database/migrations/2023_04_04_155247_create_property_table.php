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
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->string('type');
            $table->string('rooms');
            $table->integer('price');
            $table->integer('area');
            $table->text('images');
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('neighborhood');
            $table->string('Age');
            $table->string('beds');
            $table->string('bathRooms');
            $table->string('Features');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
