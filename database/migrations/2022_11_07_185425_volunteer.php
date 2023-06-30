<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('volunteer', function (Blueprint $table) {
            $table->string('FullName');
            $table->string('Eddress');
            $table->string('Email');
            $table->string('Contact');
            $table->string('Age');
            $table->string('NIC');
            $table->string('Gender');
            $table->string('Expected number of hours worked per week');
            $table->string('Password');



        });*/
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
};
