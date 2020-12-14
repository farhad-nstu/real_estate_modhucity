<?php

use Illuminate\Database\Seeder;

class ContactInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_informations')->insert([
            'phone_1' => '+8801708149971',
            'phone_2' => '+8801708149972',
            'email' => 'info@modhucity.com',
            'corporate_office' => '100 feet wide shahed Buddhijibi Road
            Dhaka-1312',
            'office_address' => 'Anando dhara 29/A, Road 11 (Old 32) Dhanmondi Dhaka-1209.'
        ]);
    }
}
