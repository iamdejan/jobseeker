<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Client", function (Blueprint $table) {
            $table->char("ClientNPWP", 20);
            $table->string("ClientName");
            $table->string("ClientType");
            $table->string("ClientAddress");

            //login...
            $table->string("ClientEmail")->unique();
            $table->string("ClientPassword");

            $table->string("ClientPhone");
            $table->longText("ClientDescription");
            $table->integer("ClientRate");

            //masukin primary key
            $table->primary("ClientNPWP");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Client");
    }
}
