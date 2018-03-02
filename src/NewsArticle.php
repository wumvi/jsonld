<?php
declare(strict_types=1);

namespace JsonLd;

class NewsArticle extends Article
{
    public function getProperties(): array
    {
        $data = [];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'NewsArticle';

        return $data;
    }
}