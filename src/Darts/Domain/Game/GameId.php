<?php
declare(strict_types=1);

namespace Akeneo\Darts\Domain\Game;

class GameId
{
    /** @var string */
    private $identifier;

    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }

    public function __toString(): string
    {
        return $this->identifier;
    }
}