<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFor()
    {
        $this->view('forLoop', ['limit' => 10])
        ->assertSeeText('0')
        ->assertSeeText('1')
        ->assertSeeText('2')
        ->assertSeeText('3')
        ->assertSeeText('4')
        ->assertSeeText('5')
        ->assertSeeText('6')
        ->assertSeeText('7')
        ->assertSeeText('8')
        ->assertSeeText('9');
    }

    
}
