<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BitcoinTest extends TestCase
{
    /**
     * @test connect
     *
     * @return void
     */
    public function testConnect()
    {
        $response = $this->get('/api/connect');

        $response->assertSee('ok');
    }

    /**
     * @test get latest block
     *
     * @return void
     */
    public function testGetLastBlock()
    {
        $response = $this->get('/api/block/last');

        $response->assertSee('hash');
    }

    /**
     * @test get new address
     *
     * @return void
     */
    public function testGetNewAddress()
    {
        $response = $this->get('/api/addr/new');
        $this->assertRegExp('/\w{35}/', $response->content());

    }


}
