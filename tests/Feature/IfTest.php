<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIf()
    {
        $this->view('if', ['hobbies' => []])
        ->assertSeeText('i have no hobbies', false);

        $this->view('if', ['hobbies' => ['coding']])
        ->assertSeeText('i have hobby !');

        $this->view('if', ['hobbies' => ['coding', 'mancing']])
        ->assertSeeText('i have multiple hobbies !');
    }
}
