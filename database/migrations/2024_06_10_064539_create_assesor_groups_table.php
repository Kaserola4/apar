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

        Schema::create('assesor_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assessor_id');
            $table->foreign('assessor_id')->references('id')->on('assessors');
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->unsignedBigInteger('consultant_id');
            $table->foreign('consultant_id')->references('id')->on('users');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesor_groups');
    }
};
