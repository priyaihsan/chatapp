<?php

namespace Database\Seeders;

use App\Models\Partisipants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartisipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Partisipants::factory(10)->create();
    }
}
