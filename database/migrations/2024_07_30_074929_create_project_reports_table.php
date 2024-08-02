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
        Schema::create('project_reports', function (Blueprint $table) {
            $table->id();

            $table->text('report_description');

            $table->unsignedBigInteger('issuer_id');
            $table->unsignedBigInteger('project_id');

            $table->foreign('issuer_id')
                ->references('id')
                ->on('users');

            $table->foreign('project_id')
                ->references('id')
                ->on('projects');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_reports');
    }
};
