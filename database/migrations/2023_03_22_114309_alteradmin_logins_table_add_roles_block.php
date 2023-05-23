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
        Schema::table('admin_logins', function (Blueprint $table) {
            $table->boolean('blocked')->nullable()->default(false);
            $table->string('role');
            $table->foreign('role')->references('role')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admin_logins', function (Blueprint $table) {
            $table->dropColumn('role_id');
        });
    }
};
