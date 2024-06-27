<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;
use App\Models\Category;

class NoteSeeder extends Seeder
{
    public function run()
    {
        // Get category IDs
        $personalCategory = Category::where('name', 'Personal')->first();
        $workCategory = Category::where('name', 'Work')->first();
        $studyCategory = Category::where('name', 'Study')->first();

        // Create sample notes
        Note::create([
            'category_id' => $personalCategory->id,
            'title' => 'Personal Note 1',
            'content' => 'This is a personal note about my daily activities.',
        ]);

        Note::create([
            'category_id' => $workCategory->id,
            'title' => 'Work Note 1',
            'content' => 'This is a work-related note about project planning.',
        ]);

        Note::create([
            'category_id' => $studyCategory->id,
            'title' => 'Study Note 1',
            'content' => 'This is a study note about algorithms and data structures.',
        ]);
    }
}
