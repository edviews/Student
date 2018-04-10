<?php

namespace Modules\Student\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Student\Entities\Profile;
use Modules\Student\Entities\Student;

class StudentDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $this->call("OthersTableSeeder");
        factory(Student::class, 10)->create();
        factory(Profile::class, 10)->create();
    }
}
