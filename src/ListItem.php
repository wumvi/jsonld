<?php

namespace JsonLd;

class ListItem extends Thing
{
    /**
     * @var Thing
     */
    private $item;

    /**
     * @var int
     */
    private $position;

    /**
     * @return Thing
     */
    public function getItem(): Thing
    {
        return $this->item;
    }

    /**
     * @param Thing $item
     */
    public function setItem(Thing $item): void
    {
        $this->item = $item;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getProperties(): array
    {
        $data = [
            'item' => $this->item,
            'position' => $this->position,
        ];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'ListItem';

        return $data;
    }
}
