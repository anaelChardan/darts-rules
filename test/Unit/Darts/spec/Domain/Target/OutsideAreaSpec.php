<?php

namespace spec\Akeneo\Darts\Domain\Target;

use Akeneo\Darts\Domain\Target\GameArea;
use Akeneo\Darts\Domain\Target\OutsideArea;
use Akeneo\Darts\Domain\Target\TargetArea;
use PhpSpec\ObjectBehavior;

class OutsideAreaSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(OutsideArea::class);
        $this->shouldImplement(TargetArea::class);
        $this->shouldImplement(GameArea::class);
    }

    function it_has_a_value()
    {
        $this->value()->shouldBeInt();
        $this->value()->shouldReturn(0);
    }
}
