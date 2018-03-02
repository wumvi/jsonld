<?php
declare(strict_types=1);

namespace JsonLd;

class Person extends Thing
{
    /**
     * Job title
     *
     * @var string
     */
    private $jobTitle;

    /**
     * Get job title
     *
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    /**
     * Set job title
     *
     * @param string $jobTitle
     */
    public function setJobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    public function getProperties(): array
    {
        $data = [];

        if ($this->jobTitle) {
            $data['jobTitle'] = $this->jobTitle;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Person';

        return $data;
    }
}