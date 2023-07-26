<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('email');
            $table->timestamp('login_time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('ip_address', 45)->nullable();
            $table->text('device_info')->nullable();
            $table->enum('keterangan', ['login', 'logout'])->default('login');
            $table->enum('status', ['success', 'failed'])->default('failed');
            $table->text('description')->nullable();
            $table->timestamps();

            // Foreign key constraint to associate a user with the login log
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->index('email');
            $table->index('ip_address');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loginlogs');
    }
};
