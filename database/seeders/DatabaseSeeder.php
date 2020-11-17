<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OperatingUnitTypesTableSeeder::class);
        $this->call(OperatingUnitsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ImplementationModesTableSeeder::class);
        $this->call(BasesTableSeeder::class);
        $this->call(FundingSourcesTableSeeder::class);
        $this->call(SustainableDevelopmentGoalsTableSeeder::class);
        $this->call(TypologiesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(SpatialCoveragesTableSeeder::class);
        $this->call(TenPointAgendasTableSeeder::class);
        $this->call(TiersTableSeeder::class);
        $this->call(TechnicalReadinessesTableSeeder::class);
        $this->call(ProjectStatusesTableSeeder::class);
        $this->call(ProcessingStatusesTableSeeder::class);
        $this->call(FundingInstitutionsTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        $this->call(GadsTableSeeder::class);
        $this->call(ReadinessesTableSeeder::class);
        $this->call(CipTypesTableSeeder::class);
        $this->call(PdpChaptersTableSeeder::class);
        $this->call(PdpIndicatorsTableSeeder::class);
        $this->call(FsStatusesTableSeeder::class);
        $this->call(AttachmentTypesTableSeeder::class);
        /**
         * New in v2
         */
        $this->call(CostStructuresTableSeeder::class);
        $this->call(PrexcProgramsTableSeeder::class);
        $this->call(PrexcSubprogramsTableSeeder::class);
        $this->call(BannerProgramsTableSeeder::class);
        $this->call(OperatingUnitPrexcProgramTableSeeder::class);
        $this->call(OperatingUnitPrexcSubprogramTableSeeder::class);
        $this->call(OperatingUnitPrexcActivityTableSeeder::class);
        $this->call(PrexcActivitiesTableSeeder::class);
        $this->call(InfrastructureSectorsTableSeeder::class);
        $this->call(InfrastructureSubsectorsTableSeeder::class);
        $this->call(ProjectPreparationDocumentsTableSeeder::class);
        $this->call(SubmissionStatusesTableSeeder::class);
    }
}
