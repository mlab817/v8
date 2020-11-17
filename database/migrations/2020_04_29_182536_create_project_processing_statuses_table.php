<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProjectProcessingStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_processing_statuses', function (Blueprint $table) {
          $table->id();
          $table->uuid('uuid')->nullable();
          $table->foreignId('project_id')->nullable()->constrained()->onDelete('cascade');
          $table->foreignId('processing_status_id')->nullable()->constrained()->onDelete('cascade');
          $table->foreignId('processed_by')->nullable()->constrained('users')->onDelete('cascade');
          $table->text('remarks')->nullable();
          $table->timestamp('processed_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('project_processing_statuses');
    }
}
