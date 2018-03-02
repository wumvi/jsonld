<?php
declare(strict_types=1);

namespace JsonLd;

class Thing extends Model
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * Url for Social site
     *
     * @var string[]
     */
    private $sameAs = [];

    /**
     * @var CreativeWork
     */
    private $mainEntityOfPage;

    /**
     * @var string[]|ImageObject[]|ImageObject
     */
    private $image;

    /**
     * @return ImageObject|ImageObject[]|string[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param ImageObject|ImageObject[]|string[] $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return CreativeWork
     */
    public function getMainEntityOfPage(): CreativeWork
    {
        return $this->mainEntityOfPage;
    }

    /**
     * @param CreativeWork $mainEntityOfPage
     */
    public function setMainEntityOfPage(CreativeWork $mainEntityOfPage): void
    {
        $this->mainEntityOfPage = $mainEntityOfPage;
    }

    /**
     * @return string[]
     */
    public function getSameAs(): array
    {
        return $this->sameAs;
    }

    /**
     * @param string[] $sameAs
     */
    public function setSameAs(array $sameAs): void
    {
        $this->sameAs = $sameAs;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProperties(): array
    {
        $data = [];

        if ($this->url) {
            $data['url'] = $this->url;
        }

        if ($this->name) {
            $data['name'] = $this->name;
        }

        if ($this->sameAs) {
            $data['sameAs'] = $this->sameAs;
        }

        if ($this->mainEntityOfPage) {
            $data['mainEntityOfPage'] = $this->mainEntityOfPage;
        }

        if ($this->description) {
            $data['description'] = $this->description;
        }

        if ($this->image) {
            $data['image'] = $this->image;
        }

        return $data;
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Thing';

        return $data;
    }
}