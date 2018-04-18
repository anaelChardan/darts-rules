<?php

namespace spec\Akeneo\Darts\Domain\Game;

use Akeneo\Darts\Domain\Game\Cricket;
use Akeneo\Darts\Domain\Game\Exception\GameAlreadyStartedException;
use Akeneo\Darts\Domain\Game\Game;
use Akeneo\Darts\Domain\Player\PlayerId;
use Akeneo\Darts\Domain\Target\Section\SectionPointsValue;
use Akeneo\Darts\Domain\Target\Section\SimpleRing;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CricketSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Cricket::class);
        $this->shouldBeAnInstanceOf(Game::class);
    }

    public function it_can_add_players()
    {
        $this->addPlayer(new PlayerId('identifier-player1'));
        $this->addPlayer(new PlayerId('identifer-player-2'));
    }

    public function it_throw_a_dart_in_1()
    {
        $this->addPlayer(new PlayerId('identifier-player-1'));

        $this->throwADartIn(new SimpleRing(new SectionPointsValue(1)));
    }

    public function it_can_be_started()
    {
        $this->start()->shouldReturn(null);
    }

    public function it_cannot_be_started_twice()
    {
        $this->start();

        $this
            ->shouldThrow(GameAlreadyStartedException::class)
            ->during('start');
    }
}
