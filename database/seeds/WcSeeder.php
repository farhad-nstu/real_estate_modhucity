<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('why_chooses')->insert(
           [ [
                'wc_text' => 'hi here',
                'wc_icon' => ' fa fa-bullhorn',
                'wc_image' => 'assets/frontEnd/images/gallery/july/ariel-front-view.jpg',
                'publication_status' => 1
            ],
            [
                'wc_text' => 'By By',
                'wc_icon' => ' fa fa-bullhorn',
                'wc_image' => 'assets/frontEnd/images/gallery/july/block-a.jpg',
                'publication_status' => 1
            ]]
        );
    }
}
