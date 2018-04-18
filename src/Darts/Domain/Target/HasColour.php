<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target;

use Akeneo\Darts\Domain\Target\Colour\Colour;

interface HasColour
{
    public function colour(): Colour;
}