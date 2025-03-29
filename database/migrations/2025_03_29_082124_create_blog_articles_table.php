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
        Schema::create('blog_articles', function (Blueprint $table) {
            $table->id('id'); // id int(11) NOT NULL
            $table->string('title', 150)->nullable();
            $table->string('slug', 150)->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('category')->nullable();
            $table->binary('short_message')->nullable();
            $table->binary('message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_articles');
    }
};
