<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'id' => 1,
            'title' => '10 bucket list destinations for your next adventure',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 1,
            'picture' => "articles-seeder/1.jpg",
            'read_time' => 5,
            'slug' => "10-bucket-list-destinations-for-your-next-adventure",
            'excerpt' => "This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 1,
            'publish_date' => now()->subDays(1),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 1,
                'tag_id' => 6,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 1,
                'tag_id' => 4,
            ]
        );

        DB::table('articles')->insert([
            'id' => 2,
            'title' => '6 insights into the French Fashion landscape',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 4,
            'picture' => "articles-seeder/9.jpg",
            'read_time' => 2,
            'slug' => "6-insights-into-the-french-fashion-landscape",
            'excerpt' => "Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 2,
            'publish_date' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 2,
                'tag_id' => 2,
            ]
        );

        DB::table('articles')->insert([
            'id' => 3,
            'title' => '6 apps you can start building right away with the Laravel bundle',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 3,
            'picture' => "articles-seeder/12.jpg",
            'read_time' => 3,
            'slug' => "6-apps-you-can-start-building-right-away-with-the-laravel-bundle",
            'excerpt' => "Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.",
            'status' => 'published',
            'show_on_homepage' => 1,
            'author_id' => 3,
            'publish_date' => now()->subDays(3),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 3,
                'tag_id' => 3,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 3,
                'tag_id' => 12,
            ]
        );

        DB::table('articles')->insert([
            'id' => 4,
            'title' => 'Trends in UX design for start-ups',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 3,
            'picture' => "articles-seeder/6.jpg",
            'read_time' => 8,
            'slug' => "trends-in-ux-design-for-start-ups",
            'excerpt' => "This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 4,
            'publish_date' => now()->subDays(1),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 4,
                'tag_id' => 10,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 4,
                'tag_id' => 8,
            ]
        );

        DB::table('articles')->insert([
            'id' => 5,
            'title' => 'Growing a fashion boutique from 0 to 100.000 customers in 6 months',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 4,
            'picture' => "articles-seeder/8.jpg",
            'read_time' => 6,
            'slug' => "growing-a-fashion-boutique-from-0-to-100.000-customers-in-6-months",
            'excerpt' => "Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 5,
            'publish_date' => now()->subDays(1),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 5,
                'tag_id' => 7,
            ]
        );

        DB::table('articles')->insert([
            'id' => 6,
            'title' => 'Take your best shot. How to become a travel photographer',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 1,
            'picture' => "articles-seeder/4.jpg",
            'read_time' => 4,
            'slug' => "take-your-best-shot-how-to-become-a-travel-photographer",
            'excerpt' => "Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 6,
            'publish_date' => now()->subDays(2),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 6,
                'tag_id' => 6,
            ]
        );
        DB::table('article_tag')->insert(
            [
                'article_id' => 6,
                'tag_id' => 7,
            ]
        );

        DB::table('articles')->insert([
            'id' => 7,
            'title' => 'How to give up sugar without giving up the fun',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 2,
            'picture' => "articles-seeder/26.jpg",
            'read_time' => 5,
            'slug' => "how-to-give-up-sugar-without-giving-up-the-fun",
            'excerpt' => "This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.",
            'status' => 'published',
            'show_on_homepage' => 1,
            'author_id' => 4,
            'publish_date' => now()->subDays(3),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 7,
                'tag_id' => 7,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 7,
                'tag_id' => 5,
            ]
        );
        DB::table('article_tag')->insert(
            [
                'article_id' => 7,
                'tag_id' => 2,
            ]
        );

        DB::table('articles')->insert([
            'id' => 8,
            'title' => '10 desserts that will make your family love you even more',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 2,
            'picture' => "articles-seeder/11.jpg",
            'read_time' => 5,
            'slug' => "10-desserts-that-will-make-your-family-love-you-even-more",
            'excerpt' => "Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 6,
            'publish_date' => now()->subDays(1),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 8,
                'tag_id' => 5,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 8,
                'tag_id' => 9,
            ]
        );

        DB::table('articles')->insert([
            'id' => 9,
            'title' => '10 stress-related health issues you can avoid by quitting your job',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 5,
            'picture' => "articles-seeder/32.jpg",
            'read_time' => 5,
            'slug' => "10-stress-related-health-issues-you-can-avoid-by-quitting-your-job",
            'excerpt' => "This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'publish_date' => now(),
            'author_id' =>3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 9,
                'tag_id' => 17,
            ]
        );

        DB::table('articles')->insert([
            'id' => 10,
            'title' => 'Make more out of your personal time',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 5,
            'picture' => "articles-seeder/27.jpg",
            'read_time' => 5,
            'slug' => "make-more-out-of-your-personal-time",
            'excerpt' => "Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 3,
            'publish_date' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 10,
                'tag_id' => 17,
            ]
        );

        DB::table('articles')->insert([
            'id' => 11,
            'title' => 'Backpacking 101: Choosing the right gear',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 1,
            'picture' => "articles-seeder/30.jpg",
            'read_time' => 5,
            'slug' => "backpacking-101-choosing-the-right-gear",
            'excerpt' => "This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.",
            'status' => 'published',
            'show_on_homepage' => 1,
            'author_id' => 6,
            'publish_date' => now()->subDays(6),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 11,
                'tag_id' => 1,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 11,
                'tag_id' => 6,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 11,
                'tag_id' => 7,
            ]
        );

        DB::table('articles')->insert([
            'id' => 12,
            'title' => 'The 10 biggest street style trends of 2019',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 4,
            'picture' => "articles-seeder/5.jpg",
            'read_time' => 5,
            'slug' => "the-10-biggest-street-style-trends-of-2019",
            'excerpt' => "Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 1,
            'publish_date' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 12,
                'tag_id' => 13,
            ]
        );
        DB::table('article_tag')->insert(
            [
                'article_id' => 12,
                'tag_id' => 10,
            ]
        );

        DB::table('articles')->insert([
            'id' => 13,
            'title' => '7 awesome Bootstrap admin dashboards with an integrated Laravel backend',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 3,
            'picture' => "articles-seeder/7.jpg",
            'read_time' => 5,
            'slug' => "7-awesome-bootstrap-admin-dashboards-with-an-integrated-laravel-backend",
            'excerpt' => "Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 4,
            'publish_date' => now()->subDays(4),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 13,
                'tag_id' => 3,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 13,
                'tag_id' => 12,
            ]
        );

        DB::table('articles')->insert([
            'id' => 14,
            'title' => 'Best Bootstrap freebies you should be bookmarking right now',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 3,
            'picture' => "articles-seeder/2.jpg",
            'read_time' => 5,
            'slug' => "best-bootstrap-freebies-you-should-be-bookmarking-right-now",
            'excerpt' => "This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.",
            'status' => 'published',
            'show_on_homepage' => 1,
            'author_id' => 5,
            'publish_date' => now()->subDays(5),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 14,
                'tag_id' => 3,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 14,
                'tag_id' => 12,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 14,
                'tag_id' => 11,
            ]
        );

        DB::table('articles')->insert([
            'id' => 15,
            'title' => 'Emmy Awards red carpet couture. A retrospective ',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 4,
            'picture' => "articles-seeder/14.jpg",
            'read_time' => 5,
            'slug' => "emmy-awards-red-carpet-couture-a-retrospective ",
            'excerpt' => "Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 6,
            'publish_date' => now()->subDays(6),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 15,
                'tag_id' => 10,
            ]
        );
        DB::table('article_tag')->insert(
            [
                'article_id' => 15,
                'tag_id' => 14,
            ]
        );

        DB::table('articles')->insert([
            'id' => 16,
            'title' => 'Travelling around the world with only $1000 in your pocket',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 1,
            'picture' => "articles-seeder/31.jpg",
            'read_time' => 5,
            'slug' => "travelling-around-the-world-with-only-1000-in-your-pocket",
            'excerpt' => "Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 5,
            'publish_date' => now()->subDays(7),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 16,
                'tag_id' => 1,
            ]
        );
        DB::table('article_tag')->insert(
            [
                'article_id' => 16,
                'tag_id' => 7,
            ]
        );

        DB::table('articles')->insert([
            'id' => 17,
            'title' => 'Cooking 101 for people who hate cooking',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 2,
            'picture' => "articles-seeder/23.jpg",
            'read_time' => 5,
            'slug' => "cooking-101-for-people-who-hate-cooking",
            'excerpt' => "This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 2,
            'publish_date' => now()->subDays(5),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 17,
                'tag_id' => 7,
            ]
        );



        DB::table('articles')->insert([
            'id' => 18,
            'title' => 'One pie recipe to rule them all',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 2,
            'picture' => "articles-seeder/29.jpg",
            'read_time' => 5,
            'slug' => "one-pie-recipe-to-rule-them-all",
            'excerpt' => "Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 3,
            'publish_date' => now()->subDays(5),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 18,
                'tag_id' => 7,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 18,
                'tag_id' => 9,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 18,
                'tag_id' => 5,
            ]
        );

        DB::table('articles')->insert([
            'id' => 19,
            'title' => 'The most awesome Laravel powered blog',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The most awesome Laravel powered blog</h3> <p>You have been looking for a Laravel blogging solution for quite some time. One that’s easy to implement on its own, but also plays nice with existing implementations. And, of course, it has to look amazing. You researched what`s out there, browsed repos and collections, counted your options and here you are. You found it. <br> <br> Material Blog PRO Laravel is easy to customize compared to Wordpress and other CMS platforms with inconsistent backend, bloated plug-ins and look-alike design. Because it comes with an already implemented Laravel backend, it has all the core features you need in a blog, right out of the box. Heck, you can even use it as it is.  <br><br>Material Blog PRO Laravel will save you up to 140+ hours of development. You can get your blog up and running in no time, while the Material inspired design will guarantee everything looks and feels seamless.<br><br>In short, this is what you get by downloading Material Blog PRO Laravel:
                <ul><li>A fully-functional blog with a Laravel-powered admin panel and a Material Design frontend </li><br><li>Example pages to get you inspired</li><br><li>A ready-to-use solution</li></ul><br><br><h3><b>Control who accesses your blog. Role-based authentication</b></h3><p>Material Blog PRO Laravel comes with three default user roles: admin, author and member. Based on these roles, users have different permission levels to access and edit information.<br><br>Admins can handle both content and user management. They can edit, delete and add articles, article categories and tags, in addition to adding, editing and deleting users and roles.  <br><br>Authors can manage content. They can add articles and accompanying categories and tags, as well as edit or delete the articles they`ve written. They can also edit their own profile information.<br><br>Members can only comment on articles, once logged in. They can also edit their profile information.<br><br>You can check out these roles & permissions in action by logging in either as admin, author or member in the live preview. </p>

            </p> </div> <div class="section col-md-12 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid " alt="Raised Image" src="/material/img/examples/img1-UPD.png"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/img2-UPD.png"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/img3-UPD.png"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> 
            <h3 ><b>Manage content and users. Out of the box CRUD functionalities</b></h3> <p>The Laravel-powered backend takes care of everything an admin should be able to do. You get fully implemented:</p>
            <ul><li>Category management. You can create categories for articles and add a suggestive picture and description for each category, in addition to editing and deleting categories.</li><br><li>Tag management. You can edit, delete and add article tags and color-code them for a better user experience. </li><br><li>Article management. This is probably one of the functionalities included in Material Blog PRO Laravel which will save you the most time, as every article has a picture, belongs to a category and can have multiple tags.</li><br><li>User & role management. Users and their roles are listed, with the possibility of adding new ones or editing and deleting existing ones.</li><br><li>Profile editing. You have the option of editing the current logged in user`s profile, including personal details, contact information and password.</li></ul>
            <p>Log in as admin in the live preview to get a feel of these ready to use CRUDs. In the left-hand menu, you`ll find everything broken down into useful functionalities: Categories, Tags, Articles, Users and Roles.   </p>
            <br><br>
            <h3><b>Put your design cap on. Example pages</b></h3>
            <br> <p>The blog also comes with several example pages to get you inspired and help you go from prototyping to delivery faster. You can get a sense of the look & feel of Material Blog PRO Laravel by browsing:</p> <br>
            <ul><li>Homepage</li><br><li>All articles example page</li><br><li>Article example page</li><br><li>Articles listed by author, category and tag examples pages</li></ul>
            <br> <br>
            <h3><b>Additional Material goodies included</b></h3><br><p>The blog`s frontend is built using Material Kit PRO and Material Dashboard PRO, which you also get, for free, in addition to the blog. This means extra goodies such as: </p><br>
            <ul><li>over 1000 handcrafted components</li><br><li>pre-built examples pages, from shopping cart and e-commerce to profile page and landing page</li><br><li>a large number of sections for putting pages together faster</li></ul>
            <br><br>
            <p>Material Blog PRO Laravel is built to make deadlines less scary and repetitive tasks, like CRUD work, less boring. All of this through an admin panel that looks and works amazing and a frontend designed to deliver a great user experience. Get it now here.</p>

            </p>
            
            <br> </div>',
            'category_id' => 3,
            'picture' => "articles-seeder/article-upd.jpg",
            'read_time' => 5,
            'slug' => "how-often-do-you-really-need-to-see-your-doctor",
            'excerpt' => "Material Blog PRO Laravel will save you up to 140+ hours of development. You can get your blog up and running in no time.",
            'status' => 'published',
            'show_on_homepage' => 1,
            'author_id' => 1,
            'publish_date' => now()->subDays(1),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 19,
                'tag_id' => 3,
            ]
        );
        DB::table('article_tag')->insert(
            [
                'article_id' => 19,
                'tag_id' => 12,
            ]
        );

        DB::table('articles')->insert([
            'id' => 20,
            'title' => 'What are superfoods? A healthy way to boost your energy levels',
            'content' => '<div class="col-md-8 ml-auto mr-auto"> <h3 class="title">The Castle Looks Different at Night...</h3> <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn\'t scroll to get here. Add a button if you want the user to see more. We are here to make life better. <br> <br> And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p> <div class="blockquote undefined"> <p> “And thank you for turning my personal jean jacket into a couture piece.” </p> <small> Kanye West, Producer. </small> </div> </div> <div class="section col-md-10 ml-auto mr-auto"> <div class="row"> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog4.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog3.jpg"> </div> <div class="col-md-4"> <img class="img-raised rounded img-fluid" alt="Raised Image" src="/material/img/examples/blog1.jpg"> </div> </div> </div> <div class="col-md-8 ml-auto mr-auto"> <h3 class="title">Rest of the Story:</h3> <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece. <br> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p> <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I\'ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I\'m so proud of the nr #1 song in the country. Panda! Good music 2016!</p> </div>',
            'category_id' => 5,
            'picture' => "articles-seeder/3.jpg",
            'read_time' => 5,
            'slug' => "what-are-superfoods-a-healthy-way-to-boost-your-energy-levels",
            'excerpt' => "Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.",
            'status' => 'published',
            'show_on_homepage' => 0,
            'author_id' => 3,
            'publish_date' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert(
            [
                'article_id' => 20,
                'tag_id' => 16,
            ]
        );

        DB::table('article_tag')->insert(
            [
                'article_id' => 20,
                'tag_id' => 15,
            ]
        );
    }
}
