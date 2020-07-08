<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'Budget travelling',
            'color' => '#e91e63',
            'slug' => 'budget-traveling',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'name' => 'Healthy eating',
            'color' => '#f44336',
            'slug' => 'healthy-eating',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 3,
            'name' => 'Web dev',
            'color' => '#ff9800',
            'slug' => 'web-dev',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 4,
            'name' => 'Destinations',
            'color' => '#4caf50',
            'slug' => 'destinations',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 5,
            'name' => 'Foodie',
            'color' => '#00bcd4',
            'slug' => 'foodie',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 6,
            'name' => 'Nature',
            'color' => '#00bcd4',
            'slug' => 'nature',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 7,
            'name' => 'Tips & tricks',
            'color' => '#e91e63',
            'slug' => 'tips&tricks',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 8,
            'name' => 'Start-up',
            'color' => '#6c757d',
            'slug' => 'start-up',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 9,
            'name' => 'Recipes',
            'color' => '#9c27b0',
            'slug' => 'recipes',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 10,
            'name' => 'Trending',
            'color' => '#00bcd4',
            'slug' => 'trending',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 11,
            'name' => 'Open source',
            'color' => '#f44336',
            'slug' => 'open-source',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 12,
            'name' => 'Admin dashboards',
            'color' => '#9c27b0',
            'slug' => 'admin-dashboards',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 13,
            'name' => 'Street style',
            'color' => '#6c757d',
            'slug' => 'street-style',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 14,
            'name' => 'Haute couture',
            'color' => '#4caf50',
            'slug' => 'haute-couture',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 15,
            'name' => 'Nutrition',
            'color' => '#4caf50',
            'slug' => 'nutrition',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 16,
            'name' => 'Healthy living',
            'color' => '#9c27b0',
            'slug' => 'healthy-living',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 17,
            'name' => 'Wellness',
            'color' => '#6c757d',
            'slug' => 'wellness',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
