<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeekerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Seeker", function (Blueprint $table) {
            $table->string("SeekerID");
            $table->string("fName");
            $table->string("lName");
            $table->string("SeekerPhone");

            //login...
            $table->string("SeekerEmail")->unique();
            $table->string("SeekerPassword");

            $table->string("SeekerAddress");
            $table->string("SeekerGender");

            //primary key
            $table->primary("SeekerID");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Seeker");
    }
}
