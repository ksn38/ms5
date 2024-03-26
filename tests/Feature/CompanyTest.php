<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CompanyTest extends TestCase
{
    use RefreshDatabase;
    public function test_admin_can_access_companies_index_page(): void
    {
        $user = User::factory()->admin()->create();
        $response = $this->actingAs($user)->get(route('companies.index'));
        $response->assertOk();
    }

    public function test_non_admin_cannot_access_company_index_page():void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('companies.index'));
        $response->assertForbidden();
    }
}
