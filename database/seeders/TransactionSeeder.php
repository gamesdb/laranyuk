<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Import Carbon to handle dates easily

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert multiple records into the 'transactions' table
        DB::table('transactions')->insert([
            [
                'amount' => 150.75,
                'date' => Carbon::now(), // Current date
                'category' => 'Food',
                'type' => 'Expense',
                'description' => 'Lunch at a restaurant',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'amount' => 200.00,
                'date' => Carbon::now()->subDays(1), // 1 day ago
                'category' => 'Entertainment',
                'type' => 'Expense',
                'description' => 'Movie ticket',
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'amount' => 500.00,
                'date' => Carbon::now()->subWeeks(2), // 2 weeks ago
                'category' => 'Salary',
                'type' => 'Income',
                'description' => 'Monthly salary',
                'created_at' => Carbon::now()->subWeeks(2),
                'updated_at' => Carbon::now()->subWeeks(2),
            ],
            [
                'amount' => 75.50,
                'date' => Carbon::now()->subMonths(1), // 1 month ago
                'category' => 'Transport',
                'type' => 'Expense',
                'description' => 'Bus pass for the month',
                'created_at' => Carbon::now()->subMonths(1),
                'updated_at' => Carbon::now()->subMonths(1),
            ],
        ]);
    }
}
