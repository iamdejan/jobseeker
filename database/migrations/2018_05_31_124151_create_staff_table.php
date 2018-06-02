<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Staff", function (Blueprint $table) {
            //login
            $table->string("StaffID");
            $table->string("StaffPassword");

            $table->string("StaffName");
            $table->string("StaffPosition");

            $table->rememberToken();

            //primary key
            $table->primary("StaffID");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Staff");
    }
}
