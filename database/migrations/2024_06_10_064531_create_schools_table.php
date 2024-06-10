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

        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pass');
            $table->string('description');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->boolean('is_signature_required')->nullable();
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
        Schema::dropIfExists('schools');
    }
};
