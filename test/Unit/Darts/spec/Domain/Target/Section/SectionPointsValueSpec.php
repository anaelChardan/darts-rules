<?php

namespace spec\Akeneo\Darts\Domain\Target\Section;

use Akeneo\Darts\Domain\Target\Section\SectionPointsValue;
use PhpSpec\ObjectBehavior;

class SectionPointsValueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(2);
        $this->shouldHaveType(SectionPointsValue::class);
    }

    function it_cannot_be_constructed_with_value_below_1()
    {
        $this
            ->shouldThrow(\InvalidArgumentException::class)
            ->during('__construct', [0]);
    }

    function it_cannot_be_constructed_with_value_above_20()
    {
        $this
            ->shouldThrow(\InvalidArgumentException::class)
            ->during('__construct', [21]);
    }
}
