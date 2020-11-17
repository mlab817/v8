<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerProgramOperatingUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_program_operating_unit', function (Blueprint $table) {
            $table->foreignId('operating_unit_id')->constrained()->onDelete('cascade');
            $table->foreignId('banner_program_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            $table->unique(['operating_unit_id','banner_program_id'],'ou_bp_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner_program_operating_unit');
    }
}
