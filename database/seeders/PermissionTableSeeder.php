<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'admin-list',
            'admin-create',
            'admin-edit',
            'admin-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'subscriber-list',
            'subscriber-create',
            'subscriber-edit',
            'subscriber-delete',
            'contact-list',
            'contact-create',
            'contact-edit',
            'contact-delete',
            'slider-list',
            'slider-create',
            'slider-edit',
            'slider-delete',
            'tag-list',
            'tag-create',
            'tag-edit',
            'tag-delete',
            'blog-list',
            'blog-create',
            'blog-edit',
            'blog-delete',
            'comment-list',
            'comment-create',
            'comment-edit',
            'comment-delete',
            'page-list',
            'page-create',
            'page-edit',
            'page-delete',
            'setting-list',
            'setting-create',
            'setting-edit',
            'setting-delete',
            'coreService-list',
            'coreService-create',
            'coreService-edit',
            'coreService-delete',
            'store-list',
            'store-create',
            'store-edit',
            'store-delete',
            'coupon-list',
            'coupon-create',
            'coupon-edit',
            'coupon-delete',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
