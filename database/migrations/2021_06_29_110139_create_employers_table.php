<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->Increments('id');
            $table->smallInteger('dep_id')->unsigned();
            $table->string('emp_name');
            $table->boolean('salary_type');
            $table->mediumInteger('salary_value');
            $table->dateTime('start_date');
            
            $table->foreign('dep_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
