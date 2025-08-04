<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForElseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testForElse()
    {
        $this->view('forElse', ['hobbies' => []])
        ->assertSeeText('ndak punya hobby');

        $this->view('forElse', ['hobbies' => ['mabok', 'begal']])
        ->assertSeeText('mabok')
        ->assertSeeText('begal');
    }
}
