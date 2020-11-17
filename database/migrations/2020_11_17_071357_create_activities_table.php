<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->foreignId('operating_unit_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('prexc_program_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('prexc_subprogram_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('banner_program_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('prexc_activity_id')->nullable()->constrained()->onDelete('set null');
            $table->text('name')->nullable();
            $table->string('acronym')->nullable();
            $table->string('uacs_code')->nullable();
            $table->boolean('trip')->default(0); // infrastructure

            $table->decimal('investment_target_2016',30,2)->default(0);
            $table->decimal('investment_target_2017',30,2)->default(0);
            $table->decimal('investment_target_2018',30,2)->default(0);
            $table->decimal('investment_target_2019',30,2)->default(0);
            $table->decimal('investment_target_2020',30,2)->default(0);
            $table->decimal('investment_target_2021',30,2)->default(0);
            $table->decimal('investment_target_2022',30,2)->default(0);
            $table->decimal('investment_target_2023',30,2)->default(0);
            $table->decimal('investment_target_2024',30,2)->default(0);
            $table->decimal('investment_target_2025',30,2)->default(0);
            $table->decimal('investment_target_total',30,2)->default(0);
            $table->decimal('infrastructure_target_2016',30,2)->default(0);
            $table->decimal('infrastructure_target_2017',30,2)->default(0);
            $table->decimal('infrastructure_target_2018',30,2)->default(0);
            $table->decimal('infrastructure_target_2019',30,2)->default(0);
            $table->decimal('infrastructure_target_2020',30,2)->default(0);
            $table->decimal('infrastructure_target_2021',30,2)->default(0);
            $table->decimal('infrastructure_target_2022',30,2)->default(0);
            $table->decimal('infrastructure_target_2023',30,2)->default(0);
            $table->decimal('infrastructure_target_2024',30,2)->default(0);
            $table->decimal('infrastructure_target_2025',30,2)->default(0);
            $table->decimal('infrastructure_target_total',30,2)->default(0);
            $table->decimal('gaa_2016',30,2)->default(0);
            $table->decimal('gaa_2017',30,2)->default(0);
            $table->decimal('gaa_2018',30,2)->default(0);
            $table->decimal('gaa_2019',30,2)->default(0);
            $table->decimal('gaa_2020',30,2)->default(0);
            $table->decimal('gaa_2021',30,2)->default(0);
            $table->decimal('gaa_2022',30,2)->default(0);
            $table->decimal('gaa_2023',30,2)->default(0);
            $table->decimal('gaa_2024',30,2)->default(0);
            $table->decimal('gaa_2025',30,2)->default(0);
            $table->decimal('gaa_total',30,2)->default(0);
            $table->decimal('nep_2016',30,2)->default(0);
            $table->decimal('nep_2017',30,2)->default(0);
            $table->decimal('nep_2018',30,2)->default(0);
            $table->decimal('nep_2019',30,2)->default(0);
            $table->decimal('nep_2020',30,2)->default(0);
            $table->decimal('nep_2021',30,2)->default(0);
            $table->decimal('nep_2022',30,2)->default(0);
            $table->decimal('nep_2023',30,2)->default(0);
            $table->decimal('nep_2024',30,2)->default(0);
            $table->decimal('nep_2025',30,2)->default(0);
            $table->decimal('nep_total',30,2)->default(0);
            $table->decimal('disbursement_2016',30,2)->default(0);
            $table->decimal('disbursement_2017',30,2)->default(0);
            $table->decimal('disbursement_2018',30,2)->default(0);
            $table->decimal('disbursement_2019',30,2)->default(0);
            $table->decimal('disbursement_2020',30,2)->default(0);
            $table->decimal('disbursement_2021',30,2)->default(0);
            $table->decimal('disbursement_2022',30,2)->default(0);
            $table->decimal('disbursement_2023',30,2)->default(0);
            $table->decimal('disbursement_2024',30,2)->default(0);
            $table->decimal('disbursement_2025',30,2)->default(0);
            $table->decimal('disbursement_total',30,2)->default(0);
            $table->boolean('finalized')->default(0);
            $table->boolean('validated')->default(0);
            $table->foreignId('submission_status_id')->nullable()->default(1)->constrained()->onDelete('set null');
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('finalized_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('validated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
            $table->timestamp('finalized_at')->nullable();
            $table->timestamp('validated_at')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
