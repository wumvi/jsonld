<?php
declare(strict_types=1);

namespace JsonLd;

class CreativeWork extends Thing
{
    /**
     * @var Person
     */
    private $author;

    /**
     * @var Organization
     */
    private $publisher;

    /**
     * @var Organization
     */
    private $provider;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $datePublished;

    /**
     * @var string
     */
    private $dateModified;

    /**
     * @var string
     */
    private $text;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return Organization
     */
    public function getProvider(): Organization
    {
        return $this->provider;
    }

    /**
     * @param Organization $provider
     */
    public function setProvider(Organization $provider): void
    {
        $this->provider = $provider;
    }

    /**
     * @return Organization
     */
    public function getPublisher(): Organization
    {
        return $this->publisher;
    }

    /**
     * @param Organization $publisher
     */
    public function setPublisher(Organization $publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getDatePublished(): string
    {
        return $this->datePublished;
    }

    /**
     * @param string $datePublished
     */
    public function setDatePublished(string $datePublished): void
    {
        $this->datePublished = $datePublished;
    }

    /**
     * @return string
     */
    public function getDateModified(): string
    {
        return $this->dateModified;
    }

    /**
     * @param string $dateModified
     */
    public function setDateModified(string $dateModified): void
    {
        $this->dateModified = $dateModified;
    }

    /**
     * @return Person
     */
    public function getAuthor(): Person
    {
        return $this->author;
    }

    /**
     * @param Person $author
     */
    public function setAuthor(Person $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getHeadline(): string
    {
        return $this->headline;
    }

    /**
     * @param string $headline
     */
    public function setHeadline(string $headline): void
    {
        $this->headline = $headline;
    }

    public function getProperties(): array
    {
        $data = [];

        if ($this->author) {
            $data['author'] = $this->author;
        }

        if ($this->publisher) {
            $data['publisher'] = $this->publisher;
        }

        if ($this->headline) {
            $data['headline'] = $this->headline;
        }

        if ($this->dateModified) {
            $data['dateModified'] = $this->dateModified;
        }

        if ($this->datePublished) {
            $data['datePublished'] = $this->datePublished;
        }

        if ($this->provider) {
            $data['provider'] = $this->provider;
        }

        if ($this->text) {
            $data['text'] = $this->text;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'CreativeWork';

        return $data;
    }
}
