<?php

namespace spec\Akeneo\Darts\Domain;

use Akeneo\Darts\Domain\Player;
use Akeneo\Darts\Domain\PlayerId;
use Akeneo\Darts\Domain\PlayerName;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    function it_is_initializable(PlayerId $id, PlayerName $playerName)
    {
        $this->beConstructedWith($id, $playerName);
        $this->shouldHaveType(Player::class);
    }
}
