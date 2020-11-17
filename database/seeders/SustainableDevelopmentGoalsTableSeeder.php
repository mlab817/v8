<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SustainableDevelopmentGoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $sdgs = [
          [
            'id' => 1,
            'name' => 'No Poverty',
            'label' => 'End poverty in all its forms everywhere'
          ],
          [
            'id' => 2,
            'name' => 'Zero Hunger',
            'label' => 'End hunger, achieve food security and improved nutrition and promote sustainable agriculture'
          ],
          [
            'id' => 3,
            'name' => 'Good Health and Well-Being',
            'label' => 'Ensure healthy lives and promote well-being for all at all ages'
          ],
          [
            'id' => 4,
            'name' => 'Quality Education',
            'label' => 'Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all'
          ],
          [
            'id' => 5,
            'name' => 'Gender Equality',
            'label' => 'Achieve gender equality and empower all women and girls'
          ],
          [
            'id' => 6,
            'name' => 'Clean Water and Sanitation',
            'label' => 'Ensure availability and sustainable management of water and sanitation for all'
          ],
          [
            'id' => 7,
            'name' => 'Affordable and Clean Energy',
            'label' => 'Ensure access to affordable, reliable, sustainable and modern energy for all'
          ],
          [
            'id' => 8,
            'name' => 'Decent Work and Economic Growth',
            'label' => 'Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all'
          ],
          [
            'id' => 9,
            'name' => 'Industry, Innovation and Infrastructure',
            'label' => 'Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation'
          ],
          [
            'id' => 10,
            'name' => 'Reduced Inequalities',
            'label' => 'Reduce inequality within and among countries'
          ],
          [
            'id' => 11,
            'name' => 'Sustainable Cities and Communities',
            'label' => 'Make cities and human settlements inclusive, safe, resilient and sustainable'
          ],
          [
            'id' => 12,
            'name' => 'Responsible Consumption and Production',
            'label' => 'Ensure sustainable consumption and production patterns'
          ],
          [
            'id' => 13,
            'name' => 'Climate Action',
            'label' => 'Take urgent action to combat climate change and its impacts'
          ],
          [
            'id' => 14,
            'name' => 'Life Below Water',
            'label' => 'Conserve and sustainably use the oceans, seas and marine resources for sustainable development'
          ],
          [
            'id' => 15,
            'name' => 'Life on Land',
            'label' => 'Protect, restore and promote sustainable use of terrestrial ecosystems, sustainably manage forests, combat desertification, and halt and reverse land degradation and halt biodiversity loss'
          ],
          [
            'id' => 16,
            'name' => 'Peace, Justice and Strong Institutions',
            'label' => 'Promote peaceful and inclusive societies for sustainable development, provide access to justice for all and build effective, accountable and inclusive institutions at all levels'
          ],
          [
            'id' => 17,
            'name' => 'Partnerships for the Goals',
            'label' => 'Strengthen the means of implementation and revitalize the global partnership for sustainable development'
          ]
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('sustainable_development_goals')->truncate();

        foreach ($sdgs as $sdg) {
          DB::table('sustainable_development_goals')->insert($sdg);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
