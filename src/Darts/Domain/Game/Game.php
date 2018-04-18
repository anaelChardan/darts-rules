<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Game;

use Akeneo\Darts\Domain\Target\GameArea;
use Akeneo\Darts\Domain\Player\PlayerId;

interface Game
{
    public function addPlayer(PlayerId $player): Game;

    public function throwADartIn(GameArea $gameArea);

    public function getCurrentPlayer(): PlayerId;

    public function start(): void;
}
