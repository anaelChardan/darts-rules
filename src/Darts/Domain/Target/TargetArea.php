<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target;

interface TargetArea extends GameArea
{
    public function value(): int;
}
