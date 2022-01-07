<?php

namespace Tests\Feature;

use App\Models\Account;
use App\Models\User;
use Tests\TestCase;

class TooManyConnectionTest extends TestCase
{
    /**
     * @test
     * @dataProvider fooProvider
     */
    function it_creates_too_many_connections($i)
    {
        User::factory(1)->create();
        Account::factory(1)->create();

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseCount('accounts', 1, 'secondConnection');
    }

    public function fooProvider()
    {
        for ($i = 0; $i < 1000; $i++) {
            yield [$i];
        }
    }
}
