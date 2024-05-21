<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Customer::factory()->count(25)->hasInvoice(10)->create();
        Customer::factory()->count(100)->hasInvoice(5)->create();

        Customer::factory()->count(100)->hasInvoice(3)->create();

        Customer::factory()->count(5)->create();

    }
}
