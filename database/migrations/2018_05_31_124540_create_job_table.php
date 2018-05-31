<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Job", function (Blueprint $table) {
            $table->string("JobID");
            $table->string("JobName");
            $table->integer("JobSalary");
            $table->longText("JobDescription");

            $table->char("ClientNPWP", 20);
            $table->string("StaffID");

            //primary
            $table->primary("JobID");

            //foreign
            $table->foreign("ClientNPWP")
                  ->references("ClientNPWP")
                  ->on("Client")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreign("StaffID")
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
        Schema::dropIfExists("Job");
    }
}
