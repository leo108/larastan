<?php

namespace Bug1819;

use App\User;

use function PHPStan\Testing\assertType;

function test(): void
{
    assertType('App\User', User::createOrRestore(['id' => 1]));
}
