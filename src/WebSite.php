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
        $data = [
            'searchAction' => $this->searchAction,
        ];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'WebSite';

        return $data;
    }
}
