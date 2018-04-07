<?php

namespace spec\Akeneo\Darts\Domain\Target;

use Akeneo\Darts\Domain\Target\GameArea;
use Akeneo\Darts\Domain\Target\OutOfTargetArea;
use PhpSpec\ObjectBehavior;

class OutOfTargetAreaSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(OutOfTargetArea::class);
        $this->shouldImplement(GameArea::class);
    }
}
