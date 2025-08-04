<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RawPhpTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRawPhp()
    {
        $this->view('rawPhp', [])
        ->assertSeeText('nama : rio')
        ->assertSeeText('alamat : puri jaya');
    }
}
