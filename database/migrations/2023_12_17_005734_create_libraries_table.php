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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studean_id')->constrained()
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('book');
            $table->date('due_date')->nullable();
            $table->boolean('status');

            // $table->unsignedBigInteger('sut_id');
            // $table->foreign('sut_id')
            //       ->references('id')
            //       ->on('studeans')
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
