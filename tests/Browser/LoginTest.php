<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
         $this->browse(function (Browser $browser) {
             $browser->visit('/login')
                ->press('Login')
                ->type('uname', 'sac@gmail.com')
                ->type('psw', 'secret')
                ->assertSee('Login');

         });
    }
}
