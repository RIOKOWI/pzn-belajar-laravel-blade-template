<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Psy\CodeCleaner\AssignThisVariablePass;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    
    public function testIsset()
    {
        // tidak boleh kata hello
        $this->view('isset-empty', [])
        ->assertDontSeeText('hello');
        
        // muncul data dari variabel $nama
        $this->view('isset-empty', ['nama' => 'rio'])
        ->assertSeeText('halo nama saya rio', false)
        ->assertSeeText('i dont have any hobbies', false);
        
        // tidak boleh ada kata "i don have any hobbies" karna variabel $hobbies ada isinya
        $this->view('isset-empty', ['nama' => 'rio', 'hobbies' => 'gaming'])
        ->assertSeeText('halo nama saya rio', false)
        ->assertDontSeeText('i dont have any hobbies', false);

    }

}
