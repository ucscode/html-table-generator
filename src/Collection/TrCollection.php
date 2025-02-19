<?php

namespace Ucscode\HtmlComponent\TableGenerator\Collection;

use Ucscode\HtmlComponent\TableGenerator\Component\Section\Tr;
use Ucscode\HtmlComponent\TableGenerator\Contracts\CollectionInterface;
use Ucscode\HtmlComponent\TableGenerator\Traits\CollectionTrait;

/**
 * @property Tr[] $items
 * @method Tr[] toArray()
 */
class TrCollection implements CollectionInterface
{
    use CollectionTrait;

    public function add(Tr $tr): static
    {
        $this->items[] = $tr;

        return $this;
    }

    public function get(int $index): ?Tr
    {
        return $this->items[$index] ?? null;
    }

    public function has(Tr $tr): bool
    {
        return in_array($tr, $this->items, true);
    }

    public function remove(Tr|int $trIdentity): static
    {
        if ($trIdentity instanceof Tr) {
            $trIdentity = $this->indexOf($trIdentity);
        }

        if ($trIdentity !== false) {
            /** @var int $indexOrTr */
            if (array_key_exists($trIdentity, $this->items)) {
                unset($this->items[$trIdentity]);
                $this->items = array_values($this->items);
            }
        }

        return $this;
    }

    public function indexOf(Tr $tr): int|bool
    {
        return array_search($tr, $this->items, true);
    }
}
