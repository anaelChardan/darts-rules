<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target\Section;

use Akeneo\Darts\Domain\Target\Colour\Black;
use Akeneo\Darts\Domain\Target\Colour\Colour;
use Akeneo\Darts\Domain\Target\Colour\White;

class SimpleRing implements SectionArea
{
    /** @var SectionPointsValue */
    private $id;
    private $colour;

    public function __construct(SectionPointsValue $id)
    {
        $this->id = $id;

        $this->colour = in_array($id->value(), [1, 4, 5, 6, 9, 11, 15, 16, 17, 19]) ? new White() : new Black();
    }

    public function value(): int
    {
        return $this->id->value();
    }

    public function colour(): Colour
    {
        return $this->colour();
    }
}
