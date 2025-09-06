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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('content');
            $table->string('code'); // unique code for the ticket
            $table->integer('order')->default(0); // order of the ticket in the project
            $table->float('estimation')->nullable(); // estimation in hours
            // $table->longText('attachments')->nullable();
            $table->foreignId('owner_id')->constrained('users');
            $table->foreignId('responsible_id')->nullable()->constrained('users');
            $table->foreignId('status_id')->constrained('ticket_statuses');
            $table->foreignId('project_id')->constrained('projects');
            $table->foreignId('type_id')->constrained('ticket_types'); // type of the ticket
            $table->foreignId('priority_id')->constrained('ticket_priorities'); // priority of the ticket
            $table->foreignId('sprint_id')->nullable()->constrained('sprints'); // sprint of the ticket
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
