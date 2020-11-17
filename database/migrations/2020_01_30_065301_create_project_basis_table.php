<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectBasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_basis', function (Blueprint $table) {
          $table->foreignId('project_id')->constrained()->onDelete('cascade');
          $table->foreignId('basis_id')->constrained()->onDelete('cascade');
          $table->timestamps();

          $table->unique(['project_id','basis_id'],'pb_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_basis');
    }
}
