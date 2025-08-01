<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/hello')
        ->assertSeeText("del Rio");
    }
    public function testView2()
    {
        $this->get('/halo')
        ->assertSeeText("Gus Fring");
    }
}
