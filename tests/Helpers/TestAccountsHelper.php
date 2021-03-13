<?php

namespace Tests\Helpers;

use App\Models\Role;
use App\Models\User;

class TestAccountsHelper
{
    public $adminUser;
    public $employeeUser;
    public $clientUser;

    /**
     * Create a standard setup for testing
     * This includes the main models such as
     * Users/Candidates/Schools/Agencies/Connections
     *
     * @param string $prefix
     */
    public function standardSetup(string $prefix = '')
    {
        $this->createUsers($prefix);
    }

    /**
     * Return the specific class variable that is asked from this class
     * 
     * @param string $model
     * @param string $prefix
     */
    public function getRecord(string $model, string $prefix)
    {
        return $this->{$prefix . $model};
    }

    /**
     * Create all admins
     * 
     * @param string $prefix
     */
    public function createUsers(string $prefix)
    {
        $this->{$prefix . 'adminUser'} = User::factory()->create([
            'role_id' => Role::ADMIN
        ]);

        $this->{$prefix . 'employeeUser'} = User::factory()->create([
            'role_id' => Role::EMPLOYEE
        ]);

        $this->{$prefix . 'clientUser'} = User::factory()->create([
            'role_id' => Role::CLIENT
        ]);
    }
}
