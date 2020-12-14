<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(COverviewSeeder::class);
        $this->call(ContactInformationSeeder::class);
        $this->call(WcSeeder::class);
    }
}
