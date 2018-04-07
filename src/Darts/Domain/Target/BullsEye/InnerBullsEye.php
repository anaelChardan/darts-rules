<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target\BullsEye;

class InnerBullsEye implements BullsEye
{
    public function value(): int
    {
        return 50;
    }
}
