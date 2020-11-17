<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatingUnitPrexcActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operating_unit_prexc_activity', function (Blueprint $table) {
            $table->foreignId('operating_unit_id')->constrained()->onDelete('cascade');
            $table->foreignId('prexc_activity_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            $table->unique(['operating_unit_id','prexc_activity_id'],'ou_pa_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operating_unit_prexc_activity');
    }
}
