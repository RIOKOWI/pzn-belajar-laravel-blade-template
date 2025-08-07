<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachOnceTest extends TestCase
{
    
    public function test_example()
    {
        $this->view('each', ['users' => [
            [
            'name' => 'rio',
            'hobbies' => ['coding', 'gaming']
            ],
            [
            'name' => 'juned',
            'hobbies' => ['begal', 'maling']
            ]
        ]])
        ->assertSeeInOrder(['.red', 'rio', 'coding', 'gaming', 'juned', 'begal', 'maling']);
    }
}
