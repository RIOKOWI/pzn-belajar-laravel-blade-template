<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StackTest extends TestCase
{
    
    public function test_example()
    {
        $this->view('stack', [])
        ->assertSeeInOrder(['third.js', 'first.js', 'second.js']);
    }
}
