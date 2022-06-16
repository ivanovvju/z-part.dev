<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('name_org')->default('')->unique();
            $table->string('full_name_org')->default('')->unique();
            $table->string('address_org')->default('');
            $table->string('inn')->default('');
            $table->string('kpp')->default('');
            $table->string('ogrn')->default('');
            $table->string('name_bank')->default('');
            $table->string('payment_account')->default('');
            $table->string('corresp_account')->default('');
            $table->string('bik')->default('');
            $table->string('fio_general_manager')->default('');
            $table->string('site')->default('');
            $table->string('phone')->default('');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
