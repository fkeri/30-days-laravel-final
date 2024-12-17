<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            // 10 jobs with these attribute overrides
            'featured' => false,
            'schedule' => 'Full Time'
        ], [
            // & 10 jobs with these attribute overrides
            'featured' => true,
            'schedule' => 'Part Time'
        ]));
    }
}
