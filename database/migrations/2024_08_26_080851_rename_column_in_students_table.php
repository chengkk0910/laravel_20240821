<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 客戶通知PM修改....2024-08-26
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('age', 'money');
            $table->integer('money')->nullable()->comment('金錢')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('money', 'age');
            $table->integer('age')->nullable()->comment('年齡')->default(0)->change();
        });
    }
};
