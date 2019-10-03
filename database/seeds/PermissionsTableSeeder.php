<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'title' => 'user_management_access',
            ],
            [
                'title' => 'permission_create',
            ],
            [
                'title' => 'permission_edit',
            ],
            [
                'title' => 'permission_show',
            ],
            [
                'title' => 'permission_delete',
            ],
            [
                'title' => 'permission_access',
            ],
            [
                'title' => 'role_create',
            ],
            [
                'title' => 'role_edit',
            ],
            [
                'title' => 'role_show',
            ],
            [
                'title' => 'role_delete',
            ],
            [
                'title' => 'role_access',
            ],
            [
                'title' => 'user_create',
            ],
            [
                'title' => 'user_edit',
            ],
            [
                'title' => 'user_show',
            ],
            [
                'title' => 'user_delete',
            ],
            [
                'title' => 'user_access',
            ],
            [
                'title' => 'user_role_edit',
            ],
            [
                'title' => 'form_create',
            ],
            [
                'title' => 'form_edit',
            ],
            [
                'title' => 'form_show',
            ],
            [
                'title' => 'form_delete',
            ],
            [
                'title' => 'form_access',
            ],
            [
                'title' => 'role_user_form_edit',
            ],
            [
                'title' => 'domain_create',
            ],
            [
                'title' => 'domain_edit',
            ],
            [
                'title' => 'domain_show',
            ],
            [
                'title' => 'domain_delete',
            ],
            [
                'title' => 'domain_access',
            ],
            [
                'title' => 'aspect_create',
            ],
            [
                'title' => 'aspect_edit',
            ],
            [
                'title' => 'aspect_show',
            ],
            [
                'title' => 'aspect_delete',
            ],
            [
                'title' => 'aspect_access',
            ],
            [
                'title' => 'indicator_create',
            ],
            [
                'title' => 'indicator_edit',
            ],
            [
                'title' => 'indicator_show',
            ],
            [
                'title' => 'indicator_delete',
            ],
            [
                'title' => 'indicator_access',
            ],
            [
                'title' => 'indicator_option_create',
            ],
            [
                'title' => 'indicator_option_edit',
            ],
            [
                'title' => 'indicator_option_show',
            ],
            [
                'title' => 'indicator_option_delete',
            ],
            [
                'title' => 'indicator_option_access',
            ],
            [
                'title' => 'indicator_file_create',
            ],
            [
                'title' => 'indicator_file_edit',
            ],
            [
                'title' => 'indicator_file_show',
            ],
            [
                'title' => 'indicator_file_delete',
            ],
            [
                'title' => 'indicator_file_access',
            ],
            [
                'title' => 'indicator_file_create',
            ],
            [
                'title' => 'review_history_create',
            ],
            [
                'title' => 'review_history_edit',
            ],
            [
                'title' => 'stage_create',
            ],
            [
                'title' => 'stage_edit',
            ],
            [
                'title' => 'stage_show',
            ],
            [
                'title' => 'stage_delete',
            ],
            [
                'title' => 'stage_access',
            ],
        ];

        Permission::query()->insert($permissions);
    }
}
