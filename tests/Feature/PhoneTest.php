<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Phone;

class PhoneTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_if_phone_factory_work_properly()
    {
        $testCount = 5;

        $user = new Phone;
        $test_result = $user->factory()->count($testCount)->create();

        $this->assertTrue(count($test_result) == $testCount, 'PHONE FACTORY TEST PASSED');
    }
}
