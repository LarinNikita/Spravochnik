<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('FIO');
            $table->string('account')->unique();
            $table->string('password');
            $table->boolean('isChief')->default(false);
            $table->string('msOutlookMail');
            $table->string('officeNumber');
            $table->string('ipPhone')->unique();
            $table->string('phoneNumber')->nullable();

            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('os_id');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
};
