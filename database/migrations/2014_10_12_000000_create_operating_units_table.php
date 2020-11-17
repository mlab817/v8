<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatingUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operating_units', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('name');
            $table->string('acronym')->nullable();
            $table->foreignId('operating_unit_type_id')->nullable()->constrained()->onDelete('set null');
            $table->string('agency_code')->nullable();
            $table->string('uacs_code')->nullable();
            $table->string('address')->nullable();
            $table->text('image')->nullable();
            $table->string('agency_head_name')->nullable();
            $table->string('agency_head_designation')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operating_units');
    }
}
