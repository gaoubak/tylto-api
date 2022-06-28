<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_fetch_data_api_successful()
    {
        $response = $this->post('api/posts', 
        ['name'=>'tylto',"genre"=>'shonen','author'=>'moi','sortie'=>'1999']
        );   
        $response->assertStatus(201);
        
    }
}
