<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AttachmentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('attachment_types')->truncate();

        DB::table('attachment_types')->insert([
        	[
        		'id' => 1,
        		'name' => 'Project Proposal'
        	],
        	[
        		'id' => 2,
        		'name' => 'Project Concept Note'
        	],
        	[
        		'id' => 3,
        		'name' => 'Feasibility Study'
        	],
        	[
        		'id' => 4,
        		'name' => 'BP 202 Form'
        	],
        	[
        		'id' => 5,
        		'name' => 'GAD Form'
        	],
        	[
        		'id' => 6,
        		'name' => 'Others'
        	]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
