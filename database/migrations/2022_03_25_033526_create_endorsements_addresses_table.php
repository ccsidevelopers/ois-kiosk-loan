<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndorsementsAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endorsements_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('endorsements_id');
            $table->string('unit_number_bld_st_subd_brgy');
            $table->string('city_municipality');
            $table->string('province');
            $table->string('endorsements_address_type');
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
        Schema::dropIfExists('endorsements_addresses');
    }
}
