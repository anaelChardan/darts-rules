<?php

namespace spec\Akeneo\Darts\Domain\Player;

use Akeneo\Darts\Domain\Player\PlayerName;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerNameSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('a_name');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(PlayerName::class);
    }
}
