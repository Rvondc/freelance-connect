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
            $table->enum('status', ['Available', 'Accepted', 'InProgress', 'Finished', 'Canceled'])->default('Available');
            $table->integer('likes_counter')->default(0);
            $table->decimal('rating', 2, 1)->nullable();
            $table->string('feedback')->nullable();
            $table->boolean('is_suspended')->default(false);

            $table->unsignedBigInteger('client_id');

            $table->foreign('client_id')
                ->references('id')
                ->on('users');

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
