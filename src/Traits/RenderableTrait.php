<?php

namespace Ucscode\HtmlComponent\HtmlTableGenerator\Traits;

use Ucscode\UssElement\Collection\Attributes;
use Ucscode\UssElement\Contracts\ElementInterface;

trait RenderableTrait
{
    protected ElementInterface $element;

    public function getElement(): ElementInterface
    {
        return $this->element;
    }

    public function render(?int $indent = null): string
    {
        return $this->element->render($indent);
    }

    public function getAttributes(): Attributes
    {
        return $this->element->getAttributes();
    }

    protected function buildElement(array|Attributes $attributes = []): void
    {
        throw new \LogicException('You must override this method');
    }
}
