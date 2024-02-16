<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::cases();

        $data = [];

        /** @var Role $role */
        foreach ($roles as $role) {
            $data[] = [
                'name' => $role->value,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        \Spatie\Permission\Models\Role::query()->insert(values: $data);
    }
}
