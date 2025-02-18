<?php

namespace Ucscode\HtmlComponent\HtmlTableGenerator\Traits;

use Ucscode\HtmlComponent\HtmlTableGenerator\Component\Section\Tr;

trait TrTrait
{
    /**
     * Table rows
     *
     * @var Tr[]
     */
    protected array $items = [];

    public function addTr(Tr $tr): static
    {
        $this->items[] = $tr;

        return $this;
    }

    public function getTr(int $index): ?Tr
    {
        return $this->items[$index] ?? null;
    }

    public function hasTr(Tr $tr): bool
    {
        return in_array($tr, $this->items, true);
    }

    public function removeTr(Tr|int $indexOrTr): static
    {
        if ($indexOrTr instanceof Tr) {
            $indexOrTr = $this->indexOf($indexOrTr);
        }

        if ($indexOrTr !== false) {
            /** @var int $indexOrTr */
            if (array_key_exists($indexOrTr, $this->items)) {
                unset($this->items[$indexOrTr]);
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