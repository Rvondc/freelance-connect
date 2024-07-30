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
            $table->text('description');
            $table->decimal('budget');
            $table->dateTime('deadline');
            $table->enum('status', ['Available', 'Accepted', 'InProgress', 'Finished', 'Canceled']);
            $table->integer('likes_counter');
            $table->decimal('rating', 2, 1);
            $table->string('feedback');
            $table->boolean('is_suspended');

            $table->unsignedBigInteger('freelancer_id');
            $table->unsignedBigInteger('client_id');

            $table->foreign('freelancer_id')
                ->references('users')
                ->on('id');

            $table->foreign('client_id')
                ->references('users')
                ->on('id');

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
