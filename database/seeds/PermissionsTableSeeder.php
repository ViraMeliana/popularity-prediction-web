<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'news_prediction_create',
            ],
            [
                'id'    => 18,
                'title' => 'news_prediction_edit',
            ],
            [
                'id'    => 19,
                'title' => 'news_prediction_show',
            ],
            [
                'id'    => 20,
                'title' => 'news_prediction_delete',
            ],
            [
                'id'    => 21,
                'title' => 'news_prediction_access',
            ],
            [
                'id'    => 22,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 23,
                'title' => 'setting_create',
            ],
            [
                'id'    => 24,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 25,
                'title' => 'setting_show',
            ],
            [
                'id'    => 26,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 27,
                'title' => 'setting_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
