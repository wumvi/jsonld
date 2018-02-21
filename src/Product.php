<?php
/**
 * Created by PhpStorm.
 * User: kozlenko.v
 * Date: 21.02.2018
 * Time: 15:26
 */

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
