<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class HomePageFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_fields')->insert([
            'title' => 'Header Slogan1',
            'slug' => 'header-slogan1',
            'type' => 'text',
            'page_id' => '1',
            'content' => 'Hãy để chúng tôi đơn giản hóa việc học của bạn',
            'content_en' => 'Let us simplify your university application',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Header Slogan2',
            'slug' => 'header-slogan2',
            'type' => 'text',
            'page_id' => '1',
            'content_en' => 'Kế hoạch học tập ở nước ngoài? Chúng tôi có thể giúp! Bắt đầu bằng cách hoàn thành đánh giá giáo dục miễn phí của bạn hoặc cuộn để tìm hiểu thêm.',
            'content' => 'Planning to study abroad? We can help! Get started by completing your free education assessment or scroll to find out more.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Content Discover',
            'slug' => 'content-discover',
            'type' => 'textarea',
            'page_id' => '1',
            'content' => '<h4>Kh&aacute;m ph&aacute;</h4>\r\n<p>Xem c&aacute;c kh&oacute;a học ph&ugrave; hợp ngay lập tức bằng c&aacute;ch ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; gi&aacute;o dục miễn ph&iacute;.</p>',
            'content_en' => '<h4>Discover</h4>\r\n<p>See matching courses instantly by completing your free education assessment.</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Content  Compare',
            'slug' => 'content-compare',
            'type' => 'textarea',
            'page_id' => '1',
            'content' => '<h4>So s&aacute;nh</h4>\r\n<p>Xem c&aacute;c kh&oacute;a học ph&ugrave; hợp ngay lập tức bằng c&aacute;ch ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; gi&aacute;o dục miễn ph&iacute; của bạn.</p>',
            'content_en' => '<h4>Compare</h4>\r\n<p>See matching courses instantly by completing your free education assessment.</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Content Apply',
            'slug' => 'content-apply',
            'type' => 'textarea',
            'page_id' => '1',
            'content' => '<h4>Ứng dụng</h4>\r\n<p>Xem c&aacute;c kh&oacute;a học ph&ugrave; hợp ngay lập tức bằng c&aacute;ch ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; gi&aacute;o dục miễn ph&iacute; của bạn.</p>',
            'content_en' => '<h4>Apply</h4>\r\n<p>See matching courses instantly by completing your free education assessment.</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Content Consult',
            'slug' => 'content-consult',
            'type' => 'textarea',
            'page_id' => '1',
            'content' => '<h4>Tư vấn</h4>\r\n<p>Xem c&aacute;c kh&oacute;a học ph&ugrave; hợp ngay lập tức bằng c&aacute;ch ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; gi&aacute;o dục miễn ph&iacute; của bạn.</p>',
            'content_en' => '<h4>Consult</h4>\r\n<p>See matching courses instantly by completing your free education assessment.</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Content Chill',
            'slug' => 'content-chill',
            'type' => 'textarea',
            'page_id' => '1',
            'content' => '<h4>Đợi th&ocirc;ng tin</h4>\r\n<p>H&atilde;y ngồi lại trong khi ch&uacute;ng t&ocirc;i xem x&eacute;t đơn xin học đại học của bạn, th&ocirc;ng tin c&aacute; nh&acirc;n, chuyến bay v&agrave; chỗ ở.</p>',
            'content_en' => '<h4>Chill</h4>\r\n<p>Sit back while we take care of your university application, personal statement, flights and accommodation.</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog percent',
            'slug' => 'blog-percent',
            'type' => 'text',
            'page_id' => '1',
            'content' => '98%',
            'content_en' => '98%',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog percent off',
            'slug' => 'blog-percent-off',
            'type' => 'text',
            'page_id' => '1',
            'content' => 'đạt tiêu chuẩn',
            'content_en' => 'obtained offrs',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog percent content',
            'slug' => 'blog-percent-content',
            'type' => 'text',
            'page_id' => '1',
            'content' => 'Với sự hỗ trợ của phần mềm sáng tạo được thiết kế để cung cấp cho các nhà tư vấn giáo dục của chúng tôi một lợi thế về công nghệ thông qua các cơ quan truyền thống, sinh viên của chúng tôi đã được hưởng dịch vụ chất lượng tốt hơn và đạt được mức giá chào giá cao hơn. Hay nhất của tất cả, dịch vụ của chúng tôi là miễn phí!',
            'content_en' => 'With the aid of innovative software designed to give our education consultants a technological edge over traditional agencies, our students have enjoyed better quality of service and obtained higher offer rates. Best of all, our services are free of charge!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog scholarships',
            'slug' => 'blog-scholarships',
            'type' => 'text',
            'page_id' => '1',
            'content' => '1 trong 2',
            'content_en' => '1 in 2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog scholarships title',
            'slug' => 'blog-scholarships-title',
            'type' => 'text',
            'page_id' => '1',
            'content' => 'trao học bổng',
            'content_en' => 'offered scholarhips',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog scholarships content',
            'slug' => 'blog-scholarships-content',
            'type' => 'text',
            'page_id' => '1',
            'content' => 'PGet của chúng tôi để biết các học bổng có sẵn cho bạn dựa trên nền tảng học tập của bạn và sự lựa chọn của trường đại học. Số tiền có thể dao động từ $ 1000 đến $ 250,000 để bù đắp cho chi phí giáo dục và sinh hoạt của bạn. Trò chuyện với chúng tôi bây giờ để được đánh giá học bổng miễn phí.',
            'content_en' => 'Our Get to know the scholarships available to you based on your academic background and choice of university. Amounts can range between $1000 to $250,000 to help offset your education and living expenses. Chat with us now for a free scholarship assessment.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog satisfaction',
            'slug' => 'blog-satisfaction',
            'type' => 'text',
            'page_id' => '1',
            'content' => '99%',
            'content_en' => '99%',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog satisfaction title',
            'slug' => 'blog-satisfaction-title',
            'type' => 'text',
            'page_id' => '1',
            'page_id' => 'sự hài lòng của sinh viên',
            'content' => 'student satisfaction',
            'content_en' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Blog satisfaction content',
            'slug' => 'blog-satisfaction-content',
            'type' => 'text',
            'page_id' => '1',
            'content' => 'Với sự hỗ trợ của phần mềm sáng tạo được thiết kế để cung cấp cho các nhà tư vấn giáo dục của chúng tôi một lợi thế về công nghệ thông qua các cơ quan truyền thống, sinh viên của chúng tôi đã được hưởng dịch vụ chất lượng tốt hơn và đạt được mức giá chào giá cao hơn. Hay nhất của tất cả, dịch vụ của chúng tôi là miễn phí!',
            'content_en' => 'With the aid of innovative software designed to give our education consultants a technological edge over traditional agencies, our students have enjoyed better quality of service and obtained higher offer rates. Best of all, our services are free of charge!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Let started title',
            'slug' => 'let-started-title',
            'type' => 'text',
            'page_id' => '1',
            'content' => 'Các thiết bị được hỗ trợ',
            'content_en' => 'The Right Tools',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Let started content',
            'slug' => 'let-started-content',
            'type' => 'text',
            'page_id' => '1',
            'content' => 'Trang web thân thiện với thiết bị di động của chúng tôi cho phép bạn tìm kiếm, so sánh và áp dụng cho hơn 15.000 khóa học một cách thuận tiện. Truy cập vào các công cụ trực tuyến và cơ sở dữ liệu tri thức của chúng tôi miễn phí',
            'content_en' => 'Our mobile-friendly website allows you to instantly search, compare and apply to over 15,000 courses at your convenience. Access to our online tools and knowledge database are free of charge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('page_fields')->insert([
            'title' => 'Header Banner',
            'slug' => 'header-banner',
            'type' => 'file',
            'page_id' => '1',
            'content' => 'public/img/home/banner.jpg',
            'content_en' => 'public/img/home/banner.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);


        DB::table('page_fields')->insert([
            'title' => 'Image Right Tools',
            'slug' => 'image-right-tools',
            'type' => 'file',
            'page_id' => '1',
            'content' => 'public/img/home/tools.jpg',
            'content_en' => 'public/img/home/tools.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

    }
}
