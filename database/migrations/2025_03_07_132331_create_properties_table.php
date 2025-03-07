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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('agent_id');
            $table->string('name');
            $table->string('purpose');
            $table->string('location');
            $table->string('type');
            $table->string('bedroom_count');
            $table->string('bathroom_count');
            $table->string('garage_count');
            $table->string('garage_size');
            $table->string('build_year');
            $table->string('size');
            $table->string('description')->nullable();
            $table->string('amenities')->nullable();
            $table->string('pool_size')->nullable();
            $table->string('addition_room')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
