<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain;

interface Game
{
    public function addPlayer(Player $player): Game;
}
