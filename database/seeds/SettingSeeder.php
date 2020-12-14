<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('basics')->insert([
            'site_name' => 'Modhu City',
            'footer_text' => 'Youth Fire IT',
            'about_site' => '<p style="margin-top: 47px;text-align:justify">The fundamental demand of a human being resides in the
            want of good quality food, shelter, cloth and medicine. However with the growth in population and 
            analyzing the present scenario, shelter has been the stand out issue for all of us. Dhaka is among 
            the fastest growing and densely populated metro-cities in the world. The city’s unplanned infrastructure and dire lack of facilities has been a burning issue over the years and a change in habit was inevitable. Keeping all these factors in mind “RAHAT & RAFIT REAL ESTATE LIMITED” stepped in to be the catalyst of a change.</p>
            <!--<p class="most"><b>Most preferred brand in affordable and premium housing segment.</b></p><p class="with">With the primary business being development of Residential, Commercial and retail sectors, the company\'s operations span across various aspects of real estate development such as land identification and acquisition, project planning, designing, marketing, sales, project execution and property services</p>-->
       <br>
       <p style="text-align:justify">The fundamental demand of a human being resides in the want of good quality food, shelter, cloth and medicine. However with the growth in population and analyzing the present scenario, shelter has been the stand out issue for all of us. Dhaka is among the fastest growing and densely populated metro-cities in the world. The city’s unplanned infrastructure and dire lack of facilities has been a burning issue over the years and a change in habit was inevitable. Keeping all these factors in mind “RAHAT & RAFIT REAL ESTATE LIMITED” stepped in to be the catalyst of a change.</p>'
        ]);
    }
}
