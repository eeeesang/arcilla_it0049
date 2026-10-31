<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_all_required_pages_return_successful_responses(): void
    {
        $this->get('/')->assertOk()->assertSee('Laravel Dashboard');
        $this->get('/about')->assertOk()->assertSee('Pink POS Foundations');
        $this->get('/customers')->assertOk()->assertSee('Casley Pilueta')->assertSee('Bernadette Santos');
        $this->get('/users')->assertOk()->assertSee('Ayeza Samantha Arcilla')->assertSee('Tobbie Arlos');
    }
}
