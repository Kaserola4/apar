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
        Schema::disableForeignKeyConstraints();

        Schema::create('assesor_subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assessor_id');
            $table->foreign('assessor_id')->references('id')->on('assessors');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesor_subjects');
    }
};
