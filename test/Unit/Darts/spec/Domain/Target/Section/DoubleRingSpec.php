<?php

namespace spec\Akeneo\Darts\Domain\Target\Section;

use Akeneo\Darts\Domain\Target\Colour\Green;
use Akeneo\Darts\Domain\Target\Section\DoubleRing;
use Akeneo\Darts\Domain\Target\GameArea;
use Akeneo\Darts\Domain\Target\Section\SectionArea;
use Akeneo\Darts\Domain\Target\Section\SectionPointsValue;
use Akeneo\Darts\Domain\Target\TargetArea;
use PhpSpec\ObjectBehavior;

class DoubleRingSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new SectionPointsValue(5));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DoubleRing::class);
        $this->shouldImplement(SectionArea::class);
        $this->shouldImplement(TargetArea::class);
        $this->shouldImplement(GameArea::class);
    }

    function it_gets_the_value()
    {
        $this->value()->shouldBeInteger();
        $this->value()->shouldBeEqualTo(10);
    }

    function it_gets_the_colour()
    {
        $this->colour()->shouldBeLike(new Green());
    }
}
