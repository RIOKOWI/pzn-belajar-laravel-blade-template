<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineBladeTemplateTest extends TestCase
{
    
    public function test_example()
    {
        $response = Blade::render('hello {{$name}}', ['name' => 'rio']);
        self::assertEquals('hello rio', $response);
    }
}
