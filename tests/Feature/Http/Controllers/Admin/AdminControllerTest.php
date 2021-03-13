<?php

namespace Tests\Feature\Http\Controllers\Admin;

use App\Http\Middleware\VerifyCsrfToken;
use Tests\TestCase;
use Tests\Traits\TestAccounts;

class AdminControllerTest extends TestCase
{
    use TestAccounts;

    /**
     * Set up the test class
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->setTestAccounts();
    }

    /**
     * Admin index page test.
     *
     * @test
     */
    public function indexPageReturns200()
    {
        $response = $this->actingAs($this->adminUser)
            ->get('/admin');

        $response->assertStatus(200);
        $response->assertViewIs('admin.home');
    }
}
