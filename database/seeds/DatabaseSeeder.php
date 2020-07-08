<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::table('tags')->truncate();
        DB::table('article_tag')->truncate();
        DB::table('categories')->truncate();
        DB::table('articles')->truncate();
        DB::table('comments')->truncate();

        $this->call([RolesTableSeeder::class, UsersTableSeeder::class, CommentsTableSeeder::class]);
        $this->call([TagsTableSeeder::class, CategoriesTableSeeder::class, ArticlesTableSeeder::class]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
