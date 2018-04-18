<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target\BullsEye;

use Akeneo\Darts\Domain\Target\Colour\Colour;
use Akeneo\Darts\Domain\Target\Colour\Red;

class InnerBullsEye implements BullsEye
{
    public function value(): int
    {
        return 50;
    }

    public function colour(): Colour
    {
        return new Red();
    }
}
