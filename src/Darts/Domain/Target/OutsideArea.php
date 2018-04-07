<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target;

class OutsideArea implements TargetArea
{
    public function value(): int
    {
        return 0;
    }
}
