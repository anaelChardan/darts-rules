<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Target\Section;

use Webmozart\Assert\Assert;

class SectionPointsValue
{
    /** @var int */
    private $pointsValue;

    public function __construct(int $pointsValue)
    {
        Assert::greaterThanEq($pointsValue, 1);
        Assert::lessThanEq($pointsValue, 20);

        $this->pointsValue = $pointsValue;
    }

    public function pointsValue(): int
    {
        return $this->pointsValue;
    }
}
