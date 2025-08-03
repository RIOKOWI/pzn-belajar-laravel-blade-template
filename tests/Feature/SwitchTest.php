<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{

    public function testSwitch()
    {
        $this->view('switch', ['values' => 'A'])
        ->assertSeeText('MANTAPNYO')
        ->assertDontSeeText('OKELAH')
        ->assertDontSeeText('CUPU')
        ->assertDontSeeText('GOBLOK');
        
        $this->view('switch', ['values' => 'B'])
        ->assertDontSeeText('MANTAPNYO')
        ->assertSeeText('OKELAH')
        ->assertDontSeeText('CUPU')
        ->assertDontSeeText('GOBLOK');

        $this->view('switch', ['values' => 'D'])
        ->assertDontSeeText('MANTAPNYO')
        ->assertDontSeeText('OKELAH')
        ->assertDontSeeText('CUPU')
        ->assertSeeText('GOBLOK');
    }
}
