<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatingUnitReviewerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operating_unit_reviewer', function (Blueprint $table) {
            $table->foreignId('operating_unit_id')->constrained()->onDelete('cascade'); // operating unit
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // reviewer
            $table->timestamps();

            $table->unique(['operating_unit_id','user_id'],'our_index');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operating_unit_reviewer');
    }
}
