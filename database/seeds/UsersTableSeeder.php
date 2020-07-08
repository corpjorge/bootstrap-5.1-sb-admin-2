<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'id' => 1,
            'name' => 'Admin Guy',
            'about' => 'I keep things running smoothly here. Just call me the Wizard of Oz. ',
            'slug' => 'admin-guy',
            'facebook' => '',
            'twitter' => '',
            'youtube' => '',
            'linkedin' => '',
            'email' => 'admin@material.com',
            'picture' => "authors-seeder/13.jpg",
            'role_id' => 1,
        ]);

        factory(App\User::class)->create([
            'id' => 2,
            'name' => 'Virginia Woolf',
            'about' => 'I am swimming in my head and write rather to stablize myself than to make a correct statement.',
            'slug' => 'virginia-woolf',
            'facebook' => 'https://www.facebook.com/VirginiaWoolfAuthor/',
            'twitter' => 'https://twitter.com/VWoolfBlog',
            'youtube' => '',
            'linkedin' => '',
            'email' => 'virginia@material.com',
            'picture' => "authors-seeder/15.jpg",
            'role_id' => 2,
        ]);

        factory(App\User::class)->create([
            'id' => 3,
            'name' => 'Ernest Hemingway',
            'about' => 'In the morning I walked down the Boulevard to the rue Soufflot for coffee and brioche. It was a fine morning. The horse-chestnut trees in the Luxembourg gardens were in bloom.',
            'slug' => 'ernest-hemingway',
            'facebook' => 'https://www.facebook.com/ErnestHemingwayAuthor/',
            'twitter' => 'https://twitter.com/DailyHemingway',
            'youtube' => '',
            'linkedin' => 'https://www.linkedin.com/in/ernest-hemingway-91a752b3',
            'email' => 'ernest@material.com',
            'picture' => "authors-seeder/17.jpg",
            'role_id' => 2,
        ]);

        factory(App\User::class)->create([
            'id' => 4,
            'name' => 'William Shakespeare',
            'about' => 'All the world\'s a stage and all the men and women merely players. They have their exits and their entrances; And one man in his time plays many parts.',
            'slug' => 'william-shakespeare',
            'facebook' => 'https://www.facebook.com/WilliamShakespeareAuthor/',
            'twitter' => '',
            'youtube' => '',
            'linkedin' => 'https://www.linkedin.com/in/william-shakespeare-ab549ba3',
            'email' => 'author@material.com',
            'picture' => "authors-seeder/18.jpg",
            'role_id' => 2,
            'created_at'=>now()->subDays(1)
        ]);

        factory(App\User::class)->create([
            'id' => 5,
            'name' => 'Jane Austen',
            'about' => 'To be always firm must be to be often obstinate. When properly to relax is the trial of judgment.',
            'slug' => 'jane-austen',
            'facebook' => 'https://www.facebook.com/JaneAustenAuthor/',
            'twitter' => 'https://twitter.com/JaneAustenLIVES',
            'youtube' => '',
            'linkedin' => '',
            'email' => 'jane@material.com',
            'picture' => "authors-seeder/25.jpg",
            'role_id' => 2,
            'created_at'=>now()->subDays(2)
        ]);

        factory(App\User::class)->create([
            'id' => 6,
            'name' => 'Leo Tolstoy',
            'about' => 'Rummaging in our souls, we often dig up something that ought to have lain there unnoticed.',
            'slug' => 'leo-tolstoy',
            'facebook' => 'https://www.facebook.com/countleotolstoy/',
            'twitter' => 'https://twitter.com/TolstoySays',
            'youtube' => '',
            'linkedin' => '',
            'email' => 'leo@material.com',
            'picture' => "authors-seeder/28.jpg",
            'role_id' => 2,
            'created_at'=>now()->subDays(1)
        ]);

        factory(App\User::class)->create([
            'id' => 7,
            'name' => 'Casual Commenter',
            'about' => '',
            'slug' => 'casual-commenter',
            'facebook' => '',
            'twitter' => '',
            'youtube' => '',
            'linkedin' => '',
            'email' => 'member@material.com',
            'picture' => "authors-seeder/16.jpg",
            'role_id' => 3,
            'created_at'=>now()->subDays(3)
        ]);
    }
}
