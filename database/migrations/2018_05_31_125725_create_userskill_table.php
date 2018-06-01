<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserskillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("UserSkill", function (Blueprint $table) {
            $table->string("SeekerID");
            $table->string("SkillID");
            $table->date("CertificationDate")->nullable();
            $table->integer("SkillLevel");

            //primary key
            $table->primary(["SeekerID", "SkillID"]);

            //foreign key
            $table->foreign("SeekerID")
                  ->references("SeekerID")
                  ->on("Seeker")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreign("SkillID")
                  ->references("SkillID")
                  ->on("Skill")
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
        Schema::dropIfExists("UserSkill");
    }
}
