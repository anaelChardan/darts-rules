<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain\Player;

interface PlayerRepositoryInterface
{
    public function nextIdentity(): PlayerId;

    public function find(PlayerId $id): Player;

    public function save(Player $player): void;
}