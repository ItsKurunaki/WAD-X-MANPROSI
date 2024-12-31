<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('form', function (Blueprint $table) {
            $table->text('admin_comment')->nullable();
            $table->boolean('is_valid')->default(false);
        });
    }

    public function down()
    {
        Schema::table('form', function (Blueprint $table) {
            $table->dropColumn(['admin_comment', 'is_valid']);
        });
    }
};