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

    // public function testShowWoOverride()
    // {
    //     $this->view('child-show', [])
    //     ->assertSeeText('Apk Mbut')
    //     ->assertSeeText('DEFAULT HEADER')
    //     ->assertSeeText('default content');
    // }

    public function testShowWOverride()
    {
        $this->view('child-show', [])
        ->assertSeeText('Apk Mbut')
        ->assertSeeText('DEFAULT HEADER')
        ->assertSeeText('embut')
        ->assertSeeText('budi');
    }
}
    