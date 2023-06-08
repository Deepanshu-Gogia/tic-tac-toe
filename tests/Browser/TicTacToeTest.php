<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TicTacToeTest extends DuskTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGameFlow()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->waitFor('.cell') // Wait for the cells to load
                ->assertSee("Player X's Turn")
                ->click('.cell[data-position="0"]') // Click on the first cell
                ->assertSee('Player O\'s Turn')
                ->click('.cell[data-position="4"]') // Click on the fifth cell
                ->assertSee('Player X\'s Turn')
                ->click('.cell[data-position="1"]') // Click on the second cell
                ->assertSee('Player O\'s Turn')
                ->click('.cell[data-position="8"]') // Click on the ninth cell
                ->assertSee('Player X\'s Turn')
                ->click('.cell[data-position="2"]') // Click on the third cell
                ->assertSee('Player X Wins!')
                ->click('#reset') // Click on the reset button
                ->assertSee("Player X's Turn");

            // Clicking on squares to place X or O
            $browser->click('.cell[data-position="0"]')
                ->assertSee('Player O\'s Turn')
                ->click('.cell[data-position="3"]')
                ->assertSee('Player X\'s Turn')
                ->click('.cell[data-position="1"]')
                ->assertSee('Player O\'s Turn')
                ->click('.cell[data-position="4"]')
                ->assertSee('Player X\'s Turn')
                ->click('.cell[data-position="2"]')
                ->assertSee('Player O\'s Turn');

            // Winning a game by getting three X's or O's in a row
            $browser->click('.cell[data-position="6"]')
                ->assertSee('Player X Wins!')
                ->click('#reset');

            // Ending a game in a tie
            $browser->click('.cell[data-position="0"]')
                ->assertSee('Player O\'s Turn')
                ->click('.cell[data-position="1"]')
                ->assertSee('Player X\'s Turn')
                ->click('.cell[data-position="2"]')
                ->assertSee('Player O\'s Turn')
                ->click('.cell[data-position="3"]')
                ->assertSee('Player X\'s Turn')
                ->click('.cell[data-position="5"]')
                ->assertSee('Player O\'s Turn')
                ->click('.cell[data-position="4"]')
                ->assertSee('Player X\'s Turn')
                ->click('.cell[data-position="6"]')
                ->assertSee('Player O\'s Turn')
                ->click('.cell[data-position="7"]')
                ->assertSee('Game ends in a tie')
                ->click('#reset');

            // Clicking the "Reset" button to start a new game
            $browser->click('.cell[data-position="0"]')
                ->assertSee('Player O\'s Turn')
                ->click('#reset')
                ->assertSee("Player X's Turn");
        });
    }

}
