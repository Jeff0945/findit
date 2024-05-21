<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained();
            $table->string('value');
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('statuses');
        
        Schema::table('items', function (Blueprint $table) {
            $table->string('status')->after('characteristics');
        });
    }
};
