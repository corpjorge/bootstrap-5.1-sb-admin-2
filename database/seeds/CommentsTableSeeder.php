<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('comments')->insert([
            'id' => 1,
            'author_id' => 7,
            'article_id' => 1,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Interesting article, I really enjoyed reading it. It explains things in detail and brings a new perspective to a topic I was recently reading about. Looking forward to upcoming articles on this topic. Keep up the good work!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 2,
            'author_id' => 6,
            'article_id' => 1,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Can I repost this article on my blog? ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 3,
            'author_id' => 1,
            'article_id' => 1,
            'like' =>3,
            'parent_id' => 2,
            'content' => ' Of course, I will backlink it. ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 4,
            'author_id' => 7,
            'article_id' => 2,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Interesting article, I really enjoyed reading it. It explains things in detail and brings a new perspective to a topic I was recently reading about. Looking forward to upcoming articles on this topic. Keep up the good work!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 5,
            'author_id' => 6,
            'article_id' => 2,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Can I repost this article on my blog? ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 6,
            'author_id' => 2,
            'article_id' => 2,
            'like' =>3,
            'parent_id' => 5,
            'content' => ' Of course, I will backlink it. ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 7,
            'author_id' => 7,
            'article_id' => 3,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Interesting article, I really enjoyed reading it. It explains things in detail and brings a new perspective to a topic I was recently reading about. Looking forward to upcoming articles on this topic. Keep up the good work!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 8,
            'author_id' => 6,
            'article_id' => 3,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Can I repost this article on my blog? ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 9,
            'author_id' => 3,
            'article_id' => 3,
            'like' =>3,
            'parent_id' => 8,
            'content' => ' Of course, I will backlink it. ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 10,
            'author_id' => 7,
            'article_id' => 4,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Interesting article, I really enjoyed reading it. It explains things in detail and brings a new perspective to a topic I was recently reading about. Looking forward to upcoming articles on this topic. Keep up the good work!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 11,
            'author_id' => 6,
            'article_id' => 4,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Can I repost this article on my blog? ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 12,
            'author_id' => 4,
            'article_id' => 4,
            'like' =>3,
            'parent_id' => 11,
            'content' => ' Of course, I will backlink it. ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 13,
            'author_id' => 7,
            'article_id' => 5,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Interesting article, I really enjoyed reading it. It explains things in detail and brings a new perspective to a topic I was recently reading about. Looking forward to upcoming articles on this topic. Keep up the good work!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 14,
            'author_id' => 6,
            'article_id' => 5,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Can I repost this article on my blog? ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 15,
            'author_id' => 5,
            'article_id' => 5,
            'like' =>3,
            'parent_id' => 14,
            'content' => ' Of course, I will backlink it. ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 16,
            'author_id' => 7,
            'article_id' => 6,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Interesting article, I really enjoyed reading it. It explains things in detail and brings a new perspective to a topic I was recently reading about. Looking forward to upcoming articles on this topic. Keep up the good work!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 17,
            'author_id' => 6,
            'article_id' => 6,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Can I repost this article on my blog? ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 18,
            'author_id' => 5,
            'article_id' => 6,
            'like' =>3,
            'parent_id' => 17,
            'content' => ' Of course, I will backlink it. ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 19,
            'author_id' => 7,
            'article_id' => 9,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Interesting article, I really enjoyed reading it. It explains things in detail and brings a new perspective to a topic I was recently reading about. Looking forward to upcoming articles on this topic. Keep up the good work!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 20,
            'author_id' => 6,
            'article_id' => 9,
            'like' =>3,
            'parent_id' => 0,
            'content' => 'Can I repost this article on my blog? ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'id' => 21,
            'author_id' => 5,
            'article_id' => 9,
            'like' =>3,
            'parent_id' => 20,
            'content' => ' Of course, I will backlink it. ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
