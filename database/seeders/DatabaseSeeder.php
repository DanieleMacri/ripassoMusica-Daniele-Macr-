<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $genres=[
            ['name' => 'Rock'],
            ['name' => 'Pop'],
            ['name' => 'Metal'],
            ['name' => 'Jazz'],
            ['name' => 'Folk'],
            ['name' => 'Classical'],
            ['name' => 'Blues'],
            ['name' => 'Country'],];
        foreach($genres as $genre){
            DB::table('genres')->insert([
                'name' => $genre['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
}
