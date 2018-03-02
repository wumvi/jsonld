<?php
declare(strict_types=1);

namespace JsonLd;

class SearchAction extends Action
{
    /**
     * @var string
     */
    private $queryInput;

    /**
     * @return string
     */
    public function getQueryInput(): string
    {
        return $this->queryInput;
    }

    /**
     * @param string $queryInput
     */
    public function setQueryInput(string $queryInput): void
    {
        $this->queryInput = $queryInput;
    }

    public function getProperties(): array
    {
        $data = [
            'queryInput' => $this->queryInput,
        ];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'SearchAction';

        return $data;
    }
}
