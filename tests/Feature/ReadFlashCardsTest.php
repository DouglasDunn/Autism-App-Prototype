<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadFlashCardsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_user_can_view_all_flash_cards_that_are_associated_with_a_child()
    {
        $child = factory('App\Child')->create();
        $flashCard = factory('App\Flash_Card')->create(['child_id' => $child->id]);

        $this->get('/children/' . $child->id . '/flash-cards')
            ->assertSee($flashCard->title);
    }
}
