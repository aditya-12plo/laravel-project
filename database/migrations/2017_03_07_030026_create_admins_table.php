<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
           $table->uuid('id');
            $table->string('nama',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->string('tlp1',14);
            $table->string('tlp2',14);
            $table->string('bio',255);
            $table->string('foto',255);
            $table->string('banner',255);
            $table->rememberToken();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
