<?php

namespace Database\Seeders;

use App\Models\CourseUser;
use Illuminate\Database\Seeder;

class UserCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseUser::factory()->count(200)->create();
    }
}
