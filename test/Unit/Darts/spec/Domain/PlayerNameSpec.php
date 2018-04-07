<?php

namespace spec\Akeneo\Darts\Domain;

use Akeneo\Darts\Domain\PlayerName;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerNameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('a_name');
        $this->shouldHaveType(PlayerName::class);
    }
}
