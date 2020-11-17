<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionInfrastructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region_infrastructures', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->foreignId('region_id')->constrained()->onDelete('cascade');
            $table->decimal('target_2016',30,2)->default(0);
            $table->decimal('target_2017',30,2)->default(0);
            $table->decimal('target_2018',30,2)->default(0);
            $table->decimal('target_2019',30,2)->default(0);
            $table->decimal('target_2020',30,2)->default(0);
            $table->decimal('target_2021',30,2)->default(0);
            $table->decimal('target_2022',30,2)->default(0);
            $table->decimal('target_2023',30,2)->default(0);
            $table->decimal('target_2024',30,2)->default(0);
            $table->decimal('target_2025',30,2)->default(0);
            $table->decimal('target_total',30,2)->default(0);
            $table->timestamps();

            $table->unique(['project_id','region_id'],'pri_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('region_infrastructures');
    }
}
