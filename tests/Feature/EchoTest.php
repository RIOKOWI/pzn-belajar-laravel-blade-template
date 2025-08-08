<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Person;
use Tests\TestCase;

class EchoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $person = new Person();
        $person->name = 'rio';
        $person->address = 'puri';

        $this->view('echo', ['person' => $person])
        ->assertSeeText('rio : puri');
    }
}
