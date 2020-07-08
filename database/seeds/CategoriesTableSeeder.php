<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Travel',
            'description' => 'Get your blog online faster than taking a selfie.',
            'slug' => 'travel',
            'picture' => "/categories-seeder/1.jpg",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Food',
            'description' => 'Managing content & users is a piece of cake.',
            'slug' => 'food',
            'picture' => "/categories-seeder/5.jpg",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Technology',
            'description' => 'Not just another example page.',
            'slug' => 'technology',
            'picture' => "/categories-seeder/3.jpg",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Fashion',
            'description' => 'Clean design will never go out of fashion.',
            'slug' => 'fashion',
            'picture' => "/categories-seeder/2.jpg",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Health',
            'description' => 'A perfectly fit blog. For any purpose.',
            'slug' => 'health',
            'picture' => "/categories-seeder/4.jpg",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
