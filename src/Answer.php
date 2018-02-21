<?php

namespace JsonLd;

class Answer extends Comment
{
    public function getProperties(): array
    {
        $data = [];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Answer';

        return $data;
    }
}
