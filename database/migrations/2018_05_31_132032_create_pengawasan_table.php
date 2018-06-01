<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengawasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Pengawasan", function (Blueprint $table) {
            $table->string("StaffID");
            $table->string("SuperviseeID");

            //primary key
            $table->primary(["StaffID", "SuperviseeID"]);

            //foreign key
            $table->foreign("StaffID")
                  ->references("StaffID")
                  ->on("Staff")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreign("SuperviseeID")
                  ->references("StaffID")
                  ->on("Staff")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Pengawasan");
    }
}
