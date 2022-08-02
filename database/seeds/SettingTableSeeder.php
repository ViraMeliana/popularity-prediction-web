<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'id'                    => 1,
                'preferred_methods'     => 'mlp-lib',
            ],
        ];

        Setting::insert($settings);
    }
}
