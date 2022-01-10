<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'Önemsiz',
            'Önemli',
            'Acil',
        ];

        foreach ($statuses as $status) {
            Status::create([
                'name' => $status
            ]);
        }
    }
}
