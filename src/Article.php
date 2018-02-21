<?php

namespace JsonLd;

class Article extends CreativeWork
{
    /**
     * @var string
     */
    private $articleBody;

    /**
     * @return string
     */
    public function getArticleBody(): string
    {
        return $this->articleBody;
    }

    /**
     * @param string $articleBody
     */
    public function setArticleBody(string $articleBody): void
    {
        $this->articleBody = $articleBody;
    }

    public function getProperties(): array
    {
        $data = [];

        if ($this->articleBody) {
            $data['articleBody'] = $this->articleBody;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Article';

        return $data;
    }
}
