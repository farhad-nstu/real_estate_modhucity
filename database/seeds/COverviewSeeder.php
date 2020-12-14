<?php

use Illuminate\Database\Seeder;

class COverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_overviews')->insert([
            'experience' => '12 years',
            'portfolio' => 'Portfolio Text',
            'project' => 'Project Text',
            'resident' => 'Resident Text'
        ]);
    }
}
