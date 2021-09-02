<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            "Sudan",
            "United Arab Emairtes",
            "Kingdom of Saudi Arabia",
            "Egypet",
        );
        foreach ($countries as  $country) {
            DB::table('countries')->insert([
                'name' => $country,
                'code' => 'NON'
            ]);
        }
    }
}
