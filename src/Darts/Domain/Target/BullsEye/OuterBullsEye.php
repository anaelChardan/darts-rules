<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target\BullsEye;

use Akeneo\Darts\Domain\Target\Colour\Colour;
use Akeneo\Darts\Domain\Target\Colour\Green;

class OuterBullsEye implements BullsEye
{
    public function value(): int
    {
        return 25;
    }

    public function colour(): Colour
    {
        return new Green();
    }
}
