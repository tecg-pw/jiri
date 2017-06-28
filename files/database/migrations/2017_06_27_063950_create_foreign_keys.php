<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('implementations', function (Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        Schema::table('implementations', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        Schema::table('meetings', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        Schema::table('meetings', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        Schema::table('meetings', function (Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        Schema::table('scores', function (Blueprint $table) {
            $table->foreign('meeting_id')->references('id')->on('meetings')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
        Schema::table('scores', function (Blueprint $table) {
            $table->foreign('implementation_id')->references('id')->on('implementations')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('implementations', function (Blueprint $table) {
            $table->dropForeign('implementations_project_id_foreign');
        });
        Schema::table('implementations', function (Blueprint $table) {
            $table->dropForeign('implementations_student_id_foreign');
        });
        Schema::table('meetings', function (Blueprint $table) {
            $table->dropForeign('meetings_user_id_foreign');
        });
        Schema::table('meetings', function (Blueprint $table) {
            $table->dropForeign('meetings_student_id_foreign');
        });
        Schema::table('meetings', function (Blueprint $table) {
            $table->dropForeign('meetings_event_id_foreign');
        });
        Schema::table('scores', function (Blueprint $table) {
            $table->dropForeign('scores_meeting_id_foreign');
        });
        Schema::table('scores', function (Blueprint $table) {
            $table->dropForeign('scores_implementation_id_foreign');
        });
    }
}
