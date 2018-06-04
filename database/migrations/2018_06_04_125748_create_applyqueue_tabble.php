<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyqueueTabble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ApplyQueue', function (Blueprint $table) {
            $table->string("SeekerID");
            $table->string("JobID");
            $table->longText("description");
            $table->string("status");

            //primary key
            $table->primary(["SeekerID", "JobID"]);

            //foreign key
            $table->foreign("SeekerID")
                  ->references("SeekerID")
                  ->on("Seeker")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreign("JobID")
                  ->references("JobID")
                  ->on("Job")
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
        Schema::dropIfExists('ApplyQueue');
    }
}
