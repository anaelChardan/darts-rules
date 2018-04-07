<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain;

use Ds\Sequence;
use Ds\Vector;

class Cricket implements Game
{
    /** @var Sequence */
    private $players;

    public function __construct()
    {
        $this->players = new Vector();
    }

    private static function copy(Sequence $players): Cricket
    {
        $copy = new self();
        $copy->players = $players;

        return $copy;
    }

    public function addPlayer(Player $player): Game
    {
        return self::copy($this->players->merge([$player]));
    }
}
