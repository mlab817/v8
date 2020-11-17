<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundingSourceInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funding_source_investments', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->foreignId('funding_source_id')->constrained()->onDelete('cascade');
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

            $table->unique(['project_id','funding_source_id'],'pfsf_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funding_source_investments');
    }
}
