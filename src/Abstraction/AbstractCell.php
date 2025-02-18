<?php

namespace Ucscode\HtmlComponent\HtmlTableGenerator\Abstraction;

use Ucscode\HtmlComponent\HtmlTableGenerator\Contracts\CellInterface;
use Ucscode\HtmlComponent\HtmlTableGenerator\Traits\TableComponentTrait;
use Ucscode\HtmlComponent\HtmlTableGenerator\Traits\DataTrait;
use Ucscode\HtmlComponent\HtmlTableGenerator\Traits\RenderableTrait;
use Ucscode\UssElement\Collection\Attributes;

abstract class AbstractCell implements CellInterface
{
    use TableComponentTrait;
    use RenderableTrait;
    use DataTrait;

    public function __construct(mixed $data = null, ?Attributes $attributes = null)
    {
        $this->data = $data;
        $this->attributes = $attributes ?? new Attributes();
    }
}
