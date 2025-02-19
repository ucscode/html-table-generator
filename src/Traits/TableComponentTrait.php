<?php

namespace Ucscode\HtmlComponent\TableGenerator\Traits;

use Ucscode\HtmlComponent\TableGenerator\Support\ParameterBag;

trait TableComponentTrait
{
    private ?ParameterBag $parameters = null;

    public function getParameters(): ParameterBag
    {
        if ($this->parameters === null) {
            $this->parameters = new ParameterBag();
        }

        return $this->parameters;
    }
}
