<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplateInheritanceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->view('child', [])
        ->assertSeeText('Aplikasi - by Rio Achyar')
        ->assertSeeText('BAGIAN HEADER')
        ->assertSeeText('bagian content');
    }
}
