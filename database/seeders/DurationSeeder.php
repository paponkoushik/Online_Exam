<?php

namespace Database\Seeders;

use App\Models\Durations;
use Illuminate\Database\Seeder;

class DurationSeeder extends Seeder
{
    public function run() {
        Durations::query()->insert([
            [
                'title' => '1 Hr',
                'time' => '1:00:00',
                'created_at' => now(),
            ],
            [
                'title' => '30 Min',
                'time' => '00:30:00',
                'created_at' => now(),
            ],
            [
                'title' => '1 Min',
                'time' => '00:01:00',
                'created_at' => now(),
            ],
            [
                'title' => '30 Sec',
                'time' => '00:00:30',
                'created_at' => now(),
            ],
        ]);
    }
}
