<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForEachTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testForEach()
    {
        $this->view('forEach', ['hobbies' => ['coding', 'gaming', 'football']])
        ->assertSeeText('coding')
        ->assertSeeText('gaming')
        ->assertSeeText('football');
    }
}
