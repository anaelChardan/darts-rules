<?php

namespace spec\Akeneo\Darts\Domain\Target\Section;

use Akeneo\Darts\Domain\Target\Colour\White;
use Akeneo\Darts\Domain\Target\GameArea;
use Akeneo\Darts\Domain\Target\Section\SectionArea;
use Akeneo\Darts\Domain\Target\Section\SimpleRing;
use Akeneo\Darts\Domain\Target\Section\SectionPointsValue;
use Akeneo\Darts\Domain\Target\TargetArea;
use PhpSpec\ObjectBehavior;

class SimpleRingSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new SectionPointsValue(5));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleRing::class);
        $this->shouldImplement(SectionArea::class);
        $this->shouldImplement(TargetArea::class);
        $this->shouldImplement(GameArea::class);
    }

    function it_gets_the_value()
    {
        $this->value()->shouldBeInteger();
        $this->value()->shouldBeEqualTo(5);
    }

    function it_gets_the_colour()
    {
        $this->colour()->shouldBeLike(new White());
    }
}
