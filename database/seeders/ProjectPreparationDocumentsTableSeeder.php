<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectPreparationDocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('project_preparation_documents')->truncate();

        DB::table('project_preparation_documents')->insert([
          [
            'id' => 1,
            'name' => 'Feasibility Study'
          ],
          [
            'id' => 2,
            'name' => 'Business Case'
          ],
          [
            'id' => 3,
            'name' => 'Project Proposal'
          ],
          [
            'id' => 4,
            'name' => 'Concept Note'
          ],
          [
            'id' => 99,
            'name' => 'Others'
          ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
