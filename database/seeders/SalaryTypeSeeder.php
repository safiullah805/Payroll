<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salary_types')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'type' => "Fixed Salary",
            'created_at' => now()
        ]);

        DB::table('salary_types')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'type' => "Per Hour",
            'created_at' => now()
        ]);
    }
}
