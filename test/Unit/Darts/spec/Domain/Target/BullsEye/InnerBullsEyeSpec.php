<?php

namespace spec\Akeneo\Darts\Domain\Target\BullsEye;

use Akeneo\Darts\Domain\Target\BullsEye\BullsEye;
use Akeneo\Darts\Domain\Target\BullsEye\InnerBullsEye;
use Akeneo\Darts\Domain\Target\GameArea;
use Akeneo\Darts\Domain\Target\TargetArea;
use PhpSpec\ObjectBehavior;

class InnerBullsEyeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(InnerBullsEye::class);
        $this->shouldImplement(BullsEye::class);
        $this->shouldImplement(TargetArea::class);
        $this->shouldImplement(GameArea::class);
    }

    function it_has_a_value()
    {
        $this->value()->shouldBeInt();
        $this->value()->shouldReturn(50);
    }
}
