<?php
declare(strict_types=1);

namespace JsonLd;

class Action extends Thing
{
    /**
     * @var string
     */
    private $target;

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @param string $target
     */
    public function setTarget(string $target): void
    {
        $this->target = $target;
    }

    public function getProperties(): array
    {
        $data = [
            'target' => $this->target,
        ];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Action';

        return $data;
    }
}
