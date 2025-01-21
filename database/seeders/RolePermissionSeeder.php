<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RolePermissionSeeder extends Seeder
{
    private $permissions = [
        'dashboard' => [
            'view',
        ],
        'user' => [
            'view',
            'create',
            'update',
            'delete',
        ],
        'resident' => [
            'view',
            'create',
            'update',
            'delete',
        ],
        'report-category' => [
            'view',
            'create',
            'update',
            'delete',
        ],
        'report' => [
            'view',
            'create',
            'update',
            'delete',
        ],
        'report-status' => [
            'view',
            'create',
            'update',
            'delete',
        ],

    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->permissions as $key => $value) {
            foreach ($value as $permission) {
                Permission::firsOrCreate([
                    'name' => $key . '-' . $permission,
                ]);
            }            
        }
        Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ])->givePermissionTo(Permission::all()); 
        Role::firstOrCreate([
            'name' => 'resident',
            'guard_name' => 'web',
        ])->givePermissionTo(
            [
                'report-category-view',

                'report-view',
                'report-create',
                'report-update',
                'report-delete',

                'report-status-view',
            ]
        );
    }
}
