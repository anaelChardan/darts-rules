<?php

declare(strict_types=1);

namespace Akeneo\Darts\Domain;

use Ramsey\Uuid\Uuid;

class PlayerId
{
    /** @var \Ramsey\Uuid\UuidInterface */
    private $id;

    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }

    public function id(): string
    {
        return $this->id->toString();
    }
}
