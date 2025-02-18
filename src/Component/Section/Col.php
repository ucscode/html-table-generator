<?php

namespace Ucscode\HtmlComponent\HtmlTableGenerator\Component\Section;

use Ucscode\HtmlComponent\HtmlTableGenerator\Contracts\TableComponentInterface;
use Ucscode\HtmlComponent\HtmlTableGenerator\Traits\RenderableTrait;
use Ucscode\HtmlComponent\HtmlTableGenerator\Traits\TableComponentTrait;
use Ucscode\UssElement\Collection\Attributes;
use Ucscode\UssElement\Contracts\ElementInterface;
use Ucscode\UssElement\Enums\NodeNameEnum;
use Ucscode\UssElement\Node\ElementNode;

class Col implements TableComponentInterface
{
    use TableComponentTrait;
    use RenderableTrait;

    public function __construct(array|Attributes $attributes = [])
    {
        $this->attributes = $attributes instanceof Attributes ? $attributes : new Attributes($attributes);
    }

    public function createElement(): ElementInterface
    {
        return new ElementNode(NodeNameEnum::NODE_COL, $this->attributes);
    }
}
