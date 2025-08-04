<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->view('loopVariable', ['hobbies' => ['begal', 'nyopet']])
        ->assertSeeText('1. begal')
        ->assertSeeText('2. nyopet');
    }
}
