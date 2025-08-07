<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    
    public function test_example()
    {
        $this->view('form', ['user' => [
                'premium' => true,
                'name' => 'rio',
                'admin' => true,
        ]])
        ->assertSee('checked')
        ->assertSee('rio')
        ->assertDontSee('readonly');

        $this->view('form', ['user' => [
                'premium' => false,
                'name' => 'rio',
                'admin' => false,
        ]])
        ->assertDontSee('checked')
        ->assertSee('rio')
        ->assertSee('readonly');
    }
}
