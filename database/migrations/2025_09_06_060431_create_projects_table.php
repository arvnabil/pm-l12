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
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('ticket_prefix')->unique(); // add a ticket prefix to the project
            $table->string('status_type')->default('default'); // type of status to use for the project (default or custom)
            $table->string('type')->default('kanban'); // type of project (kanban or scrum)
            $table->foreignId('owner_id')->constrained('users');
            $table->foreignId('status_id')->constrained('project_statuses');
            $table->softDeletes();
            $table->timestamps();
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
