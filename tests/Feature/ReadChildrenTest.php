<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ChildrenTest extends TestCase
{
    use DatabaseMigrations;

    protected $child;

    public function setup()
    {
        parent::setUp();

        $this->child = factory('App\Child')->create();
    }

    /** @test */
    function a_user_can_view_all_children()
    {
        $this->get('/children')
            ->assertSee($this->child->alias);
    }

    /** @test */
    function a_user_can_view_a_single_child()
    {
        $this->get('/children/' . $this->child->id)
            ->assertSee($this->child->alias);
    }
}
