<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            DB::statement("ALTER TABLE `projects` CHANGE COLUMN `author` `user_id` bigint unsigned NOT NULL");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            DB::statement("ALTER TABLE `projects` CHANGE COLUMN `user_id` `author` VARCHAR(255)");
        });
    }
};
