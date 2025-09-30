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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('college_id')->nullable();
            $table->foreign('college_id')->references('id')->on('colleges')->onDelete('cascade');  

            $table->string('category');

            $table->string('title');
            $table->string('sub_title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->longText('description');

            $table->longText('data')->nullable();
            $table->longText('program')->nullable();
            $table->longText('learn')->nullable();
            $table->longText('jobTitle')->nullable();
            $table->longText('workEnvironments')->nullable();
            $table->longText('key_points')->nullable();
            $table->longText('career_description')->nullable();

            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();

            $table->enum('status', ['active', 'inactive']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
