<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CssTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->view('css', ['hobbies' => [
        [
            'name' => 'rio',
            'love' => true
        ],
        [
            'name' => 'tio',
            'love' => false
        ]
        ]])
        ->assertSee('<li class="red bold">rio</li>', false)
        ->assertSee('<li class="red">tio</li>', false)
        ;

    }
}
