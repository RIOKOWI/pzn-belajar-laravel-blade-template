<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    
    public function test_example()
    {
        $errors = [
            'name' => 'name is required',
            'pass' => 'pass is required',
        ];

        $this->withViewErrors($errors)
        ->view('error', [])
        ->assertSeeText('name is required')
        ->assertSeeText('pass is required');
    }
}
