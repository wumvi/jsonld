<?php
declare(strict_types=1);

namespace JsonLd;

class Offer extends Thing
{
    /**
     * @var Product
     */
    private $itemOffered;

    /**
     * @return Product
     */
    public function getItemOffered(): Product
    {
        return $this->itemOffered;
    }

    /**
     * @param Product $itemOffered
     */
    public function setItemOffered(Product $itemOffered): void
    {
        $this->itemOffered = $itemOffered;
    }

    public function getProperties(): array
    {
        $data = [];

        if ($this->itemOffered) {
            $data['itemOffered'] = $this->itemOffered;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Offer';

        return $data;
    }
}
