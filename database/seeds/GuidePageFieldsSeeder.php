<?php

use Illuminate\Database\Seeder;
use DB;
class GuidePageFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('page_fields')->insert([
            'title' => 'Guide Title',
            'slug' => 'guide-title',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>Hướng dẫn</p>',
            'content_en' => '<p>Guide</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);


        DB::table('page_fields')->insert([
            'title' => 'About Therightu',
            'slug' => 'about-therightu',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>GIỚI THIỆU THERIGHTU</p>',
            'content_en' => '<p>ABOUT THERIGHTU</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

          DB::table('page_fields')->insert([
            'title' => 'Choosing University',
            'slug' => 'choosing-university',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>CHỌN TRƯỜNG ĐẠI HỌC</p>',
            'content_en' => '<p>CHOOSING A UNIVERSITY</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Apply to university',
            'slug' => 'apply-to-university',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>&Aacute;P DỤNG CHO TRƯỜNG ĐẠI HỌC</p>',
            'content_en' => '<p>APPLYING TO UNIVERSITY</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Accept offer',
            'slug' => 'accept-offer',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>CHẤP NHẬN Y&Ecirc;U CẦU CỦA BẠN</p>',
            'content_en' => '<p>ACCEPTING YOUR OFFER</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Finances  Scholarships',
            'slug' => 'finances-scholarships',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>HỌC PH&Iacute; &amp; HỌC BỔNG</p>',
            'content_en' => '<p>FINANCES &nbsp;&amp; &nbsp;SCHOLARSHIPS</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Flight Accomodation',
            'slug' => 'flight-accomodation',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>CHUYẾN BAY &amp; CHỖ Ở</p>',
            'content_en' => '<p>FLIGHT &amp; ACCOMODATION</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Student visa',
            'slug' => 'student-visa',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>Visa của học sinh</p>',
            'content_en' => '<p>Student visa</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Online consultation',
            'slug' => 'online-consultation',
            'type' => 'text',
            'page_id' => '2',
            'content' => '<p>Tư vẫn trực tuyến</p>',
            'content_en' => '<p>Online consultation</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);
    }
}
