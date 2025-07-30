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
        Schema::table('users', function (Blueprint $table) {
            // Drop the name column
            if (Schema::hasColumn('users', 'name')) {
                $table->dropColumn('name');
            }
            
            // Add new columns if they don't exist
            if (!Schema::hasColumn('users', 'first_name')) {
                $table->string('first_name')->after('id');
            }
            if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->after('first_name');
            }
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->after('email');
            }
            if (!Schema::hasColumn('users', 'date_of_birth')) {
                $table->date('date_of_birth')->nullable()->after('phone');
            }
            if (!Schema::hasColumn('users', 'gender')) {
                $table->string('gender', 10)->nullable()->after('date_of_birth');
            }
            if (!Schema::hasColumn('users', 'blood_group')) {
                $table->string('blood_group', 5)->nullable()->after('gender');
            }
            if (!Schema::hasColumn('users', 'address')) {
                $table->text('address')->nullable()->after('blood_group');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert the changes if needed
            if (!Schema::hasColumn('users', 'name')) {
                $table->string('name')->after('id');
            }
            
            $table->dropColumn([
                'first_name',
                'last_name',
                'phone',
                'date_of_birth',
                'gender',
                'blood_group',
                'address'
            ]);
        });
    }
};
