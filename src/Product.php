<?php
declare(strict_types=1);

namespace JsonLd;

class Product extends Thing
{
    public function getProperties(): array
    {
        $data = [];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Product';

        return $data;
    }
}
