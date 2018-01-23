<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminreport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminreport', function(Blueprint $table)
		{
			
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admin');
			$table->integer('employer_id')->unsigned();
            $table->foreign('employer_id')->references('id')->on('employers');
            $table->longText('content');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
