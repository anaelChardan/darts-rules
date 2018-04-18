<?php

namespace spec\Akeneo\Darts\Domain\Player;

use Akeneo\Darts\Domain\Player\PlayerId;
use PhpSpec\ObjectBehavior;

class PlayerIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('a-player-id');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(PlayerId::class);
    }

    public function it_has_an_identifier()
    {
        $this->__toString()->shouldReturn('a-player-id');
    }
}
