<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
      $this->browse(function ($browser) {
          $browser->visit('/')
                  -> clickLink('Register')
                  ->assertSee('Register')
                  ->value('#name','John Doe')
                  ->value('#email','johndoe@gmail.com')
                  ->value('#password','testing')
                  ->value('#password-confirm','testing')
                  ->click('button[type="submit"]')
                  ->assertPathIs('/home');
                }
        );
    }
}
