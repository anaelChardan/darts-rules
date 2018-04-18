<?php

namespace spec\Akeneo\Darts\Domain\Game;

use Akeneo\Darts\Domain\Game\GameId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('game-id');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(GameId::class);
    }

    function it_has_an_id()
    {
        $this->__toString()->shouldReturn('game-id');
    }
}
