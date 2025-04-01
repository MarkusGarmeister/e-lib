<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Library;
use App\Models\Genre;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $books = Book::factory(30)->create();
        $genres = Genre::factory(10)->create();
        $comments = Comment::factory(15)->create();
        $books->each(function ($book) use ($genres) {
            $genreIds = $genres->random(rand(1, 10))->pluck('id');
            $book->genres()->attach($genreIds);
        });
        $libraries = Library::factory(5)->create()->each(function ($library) use ($books, $users) {
            $roles = ['admin', 'editor', 'viewer'];
            $selectedUsers = $users->random(rand(1, $users->count()));
            foreach ($selectedUsers as $user) {
                $library->users()->attach($user->id, ['role' => $roles[array_rand($roles)]]);
            }
            $selectedBooks = $books->random(rand(1, $books->count()));
            if ($selectedBooks instanceof \Illuminate\Support\Collection) {
                foreach ($selectedBooks as $book) {
                    $library->books()->attach($book->id);
                }
            } else {
                $library->books()->attach($selectedBooks->id);
            }
        });
    }
}
