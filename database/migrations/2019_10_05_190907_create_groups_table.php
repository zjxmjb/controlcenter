<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
        });

        DB::table('groups')->insert([
            ['name' => 'Administrator', 'description' => 'Rank ment for vACC Director, Training Director and technicaians, access to whole system.'],
            ['name' => 'Moderator', 'description' => 'Access ment for FIR Director and Training assistants to have full control over trainings and statistics.'],
            ['name' => 'Mentor', 'description' => 'Access ment for mentors, to give them mentor-related functionality.'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
