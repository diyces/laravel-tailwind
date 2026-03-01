<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::updateOrCreate(
            ['id' => 1],
            [
                'full_name' => 'Hadi',
                'headline' => 'Fullstack Developer',
                'bio' => 'Write something about yourself...',
                'github_url' => null,
                'linkedin_url' => null,
                'avatar_path' => null,
                'cv_path' => null,
            ]
        );
    }
}