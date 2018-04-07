<?php

namespace spec\Akeneo\Darts\Domain;

use Akeneo\Darts\Domain\Cricket;
use Akeneo\Darts\Domain\Game;
use Akeneo\Darts\Domain\Player;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CricketSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Cricket::class);
        $this->shouldBeAnInstanceOf(Game::class);
    }

    public function it_can_add_players(Player $player1, Player $player2)
    {
        $this->addPlayer($player1);
        $this->addPlayer($player2);
    }
}
