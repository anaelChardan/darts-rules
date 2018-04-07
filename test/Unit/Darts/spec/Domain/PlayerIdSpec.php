<?php

namespace spec\Akeneo\Darts\Domain;

use Akeneo\Darts\Domain\PlayerId;
use PhpSpec\ObjectBehavior;

class PlayerIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PlayerId::class);
    }
}
