<?php

namespace Tests\Traits;


use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\RefreshDatabase;

trait RefreshSpecificTable
{
    use RefreshDatabase;

    protected function refreshTestDatabase()
    {
        $defaultTables = [
            // Add other default tables if needed
        ];
        $tablesToRefresh = array_merge($defaultTables);

        $tablesToExclude =
            ['governorates',
                'users',
                'roles',
                'permissions',
                'role_has_permissions',
                'role_has_permissions',
                'model_has_roles',
                'child_identification',
                'guardians'

            ]; // Add other tables to exclude here

        $this->artisan('migrate:refresh', [
            '--database' => 'mysql', // Use your desired database connection
            '--path' => 'database/migrations',
            '--step' => true,
            '--realpath' => realpath(base_path('database/migrations')),
            '--seed' => true,
        ]);

        $this->app[Kernel::class]->setArtisan(null);
    }
}
