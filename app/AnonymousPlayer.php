<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022 Kai Sassnowski
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/ksassnowski/utgars-chronicles.app
 */

namespace App;

class AnonymousPlayer implements MicroscopePlayer
{
    private string $id;

    private array $histories;

    public function __construct(string $id, array $histories = [])
    {
        $this->id = $id;
        $this->histories = $histories;
    }

    public function joinGame(History $history, ?string $name = null): void
    {
        $this->histories[$history->id] = $name;
        session()->put('histories', $this->histories);
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getName(History $history): string
    {
        return $this->histories[$history->id] . ' (guest)';
    }

    public function isPlayer(History $history): bool
    {
        return \array_key_exists($history->id, $this->histories);
    }

    public function isGuest(): bool
    {
        return true;
    }
}
