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
        Schema::create('admin_messages', function (Blueprint $table) {
            $table->id();

            $table->string('message_content');

            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('admin_id')
                ->on('users')
                ->references('id');

            $table->foreign('user_id')
                ->on('users')
                ->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_messages');
    }
};
