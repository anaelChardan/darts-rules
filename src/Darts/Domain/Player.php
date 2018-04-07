<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain;

class Player
{
    /** @var PlayerName */
    private $playerName;

    /** @var PlayerId */
    private $id;

    public function __construct(PlayerId $id, PlayerName $playerName)
    {
        $this->playerName = $playerName;
        $this->id = $id;
    }
}
