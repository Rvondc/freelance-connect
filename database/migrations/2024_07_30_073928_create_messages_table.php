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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('freelancer_id');

            $table->unsignedBigInteger('project_id');

            $table->enum('sender', ['Client', 'Freelancer']);

            $table->foreign('project_id')
                ->references('projects')
                ->on('id');

            $table->foreign('client_id')
                ->references('users')
                ->on('id');

            $table->foreign('freelancer_id')
                ->references('users')
                ->on('id');

            $table->text('message_content');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
