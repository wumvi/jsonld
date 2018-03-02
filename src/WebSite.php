<?php

namespace JsonLd;

class WebSite extends CreativeWork
{
    /**
     * @var SearchAction
     */
    private $searchAction;

    public function getProperties(): array
    {
        $data = [];

        if ($this->searchAction) {
            $data['searchAction'] = $this->searchAction;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'WebSite';

        return $data;
    }
}
