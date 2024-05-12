<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            
            $table->string('user_type')->default('admin')->after('id');
            $table->string('first_name')->after('user_type');
            $table->string('middle_name')->after('first_name')->nullable();
            $table->string('last_name')->after('middle_name');
        });
    }
    
    public function down()
    {
        Schema::table('', function (Blueprint $table) {
            $table->dropColumn(['user_type', 'first_name', 'middle_name', 'last_name']);
            $table->string('name')->after('id');
        });
    }
};
