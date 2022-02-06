<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeedbackAndScoreToSubmittedAssignments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submitted_assignments', function (Blueprint $table) {
            $table->bigInteger('score')->nullable();
            $table->mediumText('feedback')->nullable();
            $table->string('matric_no');
            $table->string('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submitted_assignments', function (Blueprint $table) {
            $table->dropColumn('score');
            $table->dropColumn('feedback');
            $table->dropColumn('matric_no');
            $table->dropColumn('file');
        });
    }
}
