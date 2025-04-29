<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentFrequency extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_frequencies')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'frequency' => "Weekly",
            'created_at' => now()
        ]);

        DB::table('payment_frequencies')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'frequency' => "Bi Weekly",
            'created_at' => now()
        ]);

        DB::table('payment_frequencies')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'frequency' => "Monthly",
            'created_at' => now()
        ]);

        DB::table('payment_frequencies')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'frequency' => "Semi Monthly",
            'created_at' => now()
        ]);
    }
}
