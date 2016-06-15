<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cso', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('employee_name');
			$table->string('address');
			$table->string('gender');
			$table->string('project_name');
			$table->string('birthplace');
			$table->integer('phone');
			$table->integer('id_number');
			$table->date('begin_date');
			$table->date('birthdate');
			$table->string('job_name');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cso');
    }
}
