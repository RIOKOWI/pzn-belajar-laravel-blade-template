<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->view('include', [])
        ->assertSeeText('Rio Achyar')
        ->assertSeeText('Welcome')
        ->assertSeeText('dimsum rafi')
        ->assertSeeText('juned')
        ;
        
        $this->view('include', ['title' => 'Embut'])
        ->assertSeeText('Embut')
        ->assertSeeText('Welcome')
        ->assertSeeText('dimsum rafi')
        ->assertSeeText('juned')
        ;
    }
}
