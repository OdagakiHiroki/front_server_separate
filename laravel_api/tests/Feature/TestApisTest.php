<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestApisTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function test_returnResponseData(){
        $requestData = [
            'test' => 'testData',
        ];

        $responseData = [
            'test' => 'responsetestData',
        ];

        $response = $this->json('POST', '/api/testapis', $requestData);
        $response
            ->assertStatus(200)
            ->assertJson($responseData);
    }
}
