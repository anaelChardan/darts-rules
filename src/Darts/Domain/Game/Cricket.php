<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Game;

use Akeneo\Darts\Domain\Game\Exception\GameAlreadyStartedException;
use Akeneo\Darts\Domain\Target\GameArea;
use Akeneo\Darts\Domain\Player\PlayerId;
use Ds\Sequence;
use Ds\Vector;

class Cricket implements Game
{
    /** @var Sequence */
    private $players;

    private $currentPlayer;

    private $isStarted = false;

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

    public function addPlayer(PlayerId $player): Game
    {
        return self::copy($this->players->merge([$player]));
    }

    public function throwADartIn(GameArea $gameArea)
    {
    }

    public function getCurrentPlayer(): PlayerId
    {
        // TODO: Implement getCurrentPlayer() method.
    }

    public function start(): void
    {
        if (true === $this->isStarted) {
            throw new GameAlreadyStartedException();
        }

        $this->isStarted = true;
    }
}
