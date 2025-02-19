<?php

namespace Ucscode\HtmlComponent\TableGenerator\Collection;

use Ucscode\HtmlComponent\TableGenerator\Contracts\CellInterface;
use Ucscode\HtmlComponent\TableGenerator\Contracts\CollectionInterface;
use Ucscode\HtmlComponent\TableGenerator\Traits\CollectionTrait;

/**
 * @property CellInterface[] $items
 * @method CellInterface[] toArray()
 */
class CellCollection implements CollectionInterface
{
    use CollectionTrait;

    public function add(CellInterface $cell): static
    {
        $this->items[] = $cell;

        return $this;
    }

    public function get(int $index): ?CellInterface
    {
        return $this->items[$index] ?? null;
    }

    public function has(CellInterface $cell): bool
    {
        return in_array($cell, $this->items, true);
    }

    public function remove(CellInterface|int $cellIdentity): static
    {
        if ($cellIdentity instanceof CellInterface) {
            $cellIdentity = $this->indexOf($cellIdentity);
        }

        if ($cellIdentity !== false) {
            /** @var int $indexOrCell */
            if (array_key_exists($cellIdentity, $this->items)) {
                unset($this->items[$cellIdentity]);
                $this->items = array_values($this->items);
            }
        }

        return $this;
    }

    public function indexOf(CellInterface $cell): int|bool
    {
        return array_search($cell, $this->items, true);
    }
}
