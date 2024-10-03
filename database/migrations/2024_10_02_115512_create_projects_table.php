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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('name');  // Name of the project
            $table->text('description')->nullable();  // Description of the project
            $table->date('start_date')->nullable();  // Project start date
            $table->date('end_date')->nullable();  // Project end date
            $table->string('url')->nullable();  // URL of the project (if applicable)
            $table->string('repository_link')->nullable();  // URL to the project repository (e.g., GitHub)
            $table->string('thumbnail')->nullable();  // URL to the project thumbnail
            $table->timestamps();  // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
