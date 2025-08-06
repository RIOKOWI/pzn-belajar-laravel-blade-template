<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->view('include-condition', ['user' => [
            'name' => 'rio',
            'owner' => true
        ]])
        ->assertSeeText('Selamat Datang Owner')
        ->assertSeeText('selamat datang rio');

        $this->view('include-condition', ['user' => [
            'name' => 'rio',
            'owner' => false
        ]])
        ->assertDontSeeText('Selamat Datang Owner')
        ->assertSeeText('selamat datang rio');
    }
}
