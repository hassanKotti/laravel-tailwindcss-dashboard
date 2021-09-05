<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('contacts')->insert([
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'phone' => '0969609952',
                'address' => 'karama center,bur dubai,dubai ,uae',
                'city' => 'bur dubai',
                'state' => 'dubai',
                'organization_id' => 1,
                'country_id' => 1,
                'postal_code' => '123456'
            ]);
        }
    }
}
