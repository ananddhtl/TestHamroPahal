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
        Schema::create('child_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('childpage_id');
            $table->integer('parentpage_id')->nullable();
            $table->text("text")->nullable();
            $table->text("Thumbnailimg")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_contents');
    }
};
