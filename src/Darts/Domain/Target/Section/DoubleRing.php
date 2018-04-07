<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target\Section;

class DoubleRing implements SectionArea
{
    /** @var SectionPointsValue */
    private $id;

    public function __construct(SectionPointsValue $id)
    {
        $this->id = $id;
    }

    public function value(): int
    {
        return 2 * $this->id->pointsValue();
    }
}
