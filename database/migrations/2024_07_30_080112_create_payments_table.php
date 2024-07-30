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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->decimal('amount');

            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('receiver_id');
            $table->unsignedBigInteger('issuer_id');

            $table->foreign('project_id')
                ->references('projects')
                ->on('id');

            $table->foreign('receiver_id')
                ->references('users')
                ->on('id');

            $table->foreign('issuer_id')
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
        Schema::dropIfExists('payments');
    }
};
