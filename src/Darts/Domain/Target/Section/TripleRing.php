<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target\Section;

use Akeneo\Darts\Domain\Target\Colour\Colour;
use Akeneo\Darts\Domain\Target\Colour\Green;
use Akeneo\Darts\Domain\Target\Colour\Red;

class TripleRing implements SectionArea
{
    /** @var SectionPointsValue */
    private $id;

    /** @var Colour */
    private $colour;

    public function __construct(SectionPointsValue $id)
    {
        $this->id = $id;

        $this->colour = in_array($id->value(), [1, 4, 5, 6, 9, 11, 15, 16, 17, 19]) ? new Green() : new Red();
    }

    public function value(): int
    {
        return 3 * $this->id->value();
    }

    public function colour(): Colour
    {
        return $this->colour;
    }
}
