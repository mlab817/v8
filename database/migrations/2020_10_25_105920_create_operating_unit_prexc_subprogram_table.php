<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatingUnitPrexcSubprogramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operating_unit_prexc_subprogram', function (Blueprint $table) {
          $table->foreignId('operating_unit_id')->constrained()->onDelete('cascade');
          $table->foreignId('prexc_subprogram_id')->constrained()->onDelete('cascade');
          $table->timestamps();

          $table->unique(['operating_unit_id','prexc_subprogram_id'],'ou_psp_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operating_unit_prexc_subprogram');
    }
}
