<?php

namespace spec\Akeneo\Darts\Domain\Player;

use Akeneo\Darts\Domain\Player\Player;
use Akeneo\Darts\Domain\Player\PlayerId;
use Akeneo\Darts\Domain\Player\PlayerName;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new PlayerId('identifier'), new PlayerName('player-name'));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Player::class);
    }
}
