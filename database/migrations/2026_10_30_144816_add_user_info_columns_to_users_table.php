<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix', 20)->nullable();

            $table->string('phone', 20)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender', 30)->nullable();
            $table->text('address_1')->nullable();
            $table->text('address_2')->nullable();


            $table->index(['last_name', 'first_name'], 'user_name_idx');

            $table->string('model_type',30)->default('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
            $table->dropColumn('suffix');
            $table->dropColumn('phone');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('gender');
            $table->dropColumn('suffix');
            $table->dropColumn('address_1');
            $table->dropColumn('address_2');
            $table->dropColumn('model_type');
            $table->dropIndex('user_name_idx');
        });
    }
};
