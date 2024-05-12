<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('found_at');
            $table->string('characteristics');
            $table->string('status');
            $table->unsignedBigInteger('reported_by')->nullable();
            $table->dateTime('reported_at')->nullable();
            $table->unsignedBigInteger('acknowledged_by')->nullable();
            $table->unsignedBigInteger('claimed_by')->nullable();
            $table->dateTime('claimed_at')->nullable();
            $table->unsignedBigInteger('released_by')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('reported_by')->references('id')->on('personal_infos');
            $table->foreign('acknowledged_by')->references('id')->on('personal_infos');
            $table->foreign('claimed_by')->references('id')->on('personal_infos');
            $table->foreign('released_by')->references('id')->on('personal_infos');
            $table->foreign('created_by')->references('id')->on('users');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
