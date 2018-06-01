<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobskillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("JobSkill", function (Blueprint $table) {
            $table->string("SkillID");
            $table->string("JobID");

            //primary key
            $table->primary(["SkillID", "JobID"]);

            //foreign key
            $table->foreign("SkillID")
                  ->references("SkillID")
                  ->on("Skill")
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
        Schema::dropIfExists("JobSkill");
    }
}
