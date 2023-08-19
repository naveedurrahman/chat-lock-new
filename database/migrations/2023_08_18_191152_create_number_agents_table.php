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
        Schema::create('number_agents', function (Blueprint $table) {
            $table->foreignId('agent_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('number_id')->references('id')->on('numbers')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('number_agents');
    }
};
