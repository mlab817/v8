<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Flynsarmy\CsvSeeder\CsvSeeder;

class PrexcActivitiesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'prexc_activities';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'/database/seeders/csvs/prexc_activities.csv';
    }

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($this->table)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        parent::run();
    }
}
