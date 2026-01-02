<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        Employer::factory(10)->create();
        $tags = Tag::factory()->count(20)->create();

        Job::factory()
            ->count(10)
            ->create()
            ->each(function ($job) use ($tags) {
                $job->tags()->attach(
                    $tags->random(3)->pluck('id')->toArray()
                );
            });    
        }
}
