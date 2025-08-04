<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->view('while', ['i' => 0])
        ->assertSeeText('print ini : 0')
        ->assertSeeText('print ini : 1')
        ->assertSeeText('print ini : 2')
        ->assertSeeText('print ini : 3')
        ->assertSeeText('print ini : 4')
        ->assertSeeText('print ini : 5')
        ->assertSeeText('print ini : 6')
        ->assertSeeText('print ini : 7')
        ->assertSeeText('print ini : 8')
        ->assertSeeText('print ini : 9')
        ;
    }
}
