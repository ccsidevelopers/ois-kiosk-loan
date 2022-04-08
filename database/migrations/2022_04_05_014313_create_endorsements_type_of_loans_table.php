<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndorsementsTypeOfLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endorsements_type_of_loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('endorsements_id');
            $table->string('motorcycle_loan');
            $table->string('personal_salary_loan');
            $table->string('auto_loan');
            $table->string('home_house_loan');
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
        Schema::dropIfExists('endorsements_type_of_loans');
    }
}
