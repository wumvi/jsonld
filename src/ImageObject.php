<?php

namespace JsonLd;

class ImageObject extends MediaObject
{
    /**
     * @var string
     */
    private $caption;

    /**
     * @var bool
     */
    private $representativeOfPage;

    /**
     * @var ImageObject
     */
    private $thumbnail;

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @return bool
     */
    public function isRepresentativeOfPage(): bool
    {
        return $this->representativeOfPage;
    }

    /**
     * @param bool $representativeOfPage
     */
    public function setRepresentativeOfPage(bool $representativeOfPage): void
    {
        $this->representativeOfPage = $representativeOfPage;
    }

    /**
     * @return ImageObject
     */
    public function getThumbnail(): ImageObject
    {
        return $this->thumbnail;
    }

    /**
     * @param ImageObject $thumbnail
     */
    public function setThumbnail(ImageObject $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    public function getProperties(): array
    {
        $data = [];

        if ($this->representativeOfPage) {
            $data['representativeOfPage'] = $this->representativeOfPage;
        }

        if ($this->thumbnail) {
            $data['thumbnail'] = $this->thumbnail;
        }

        if ($this->caption) {
            $data['caption'] = $this->caption;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'ImageObject';

        return $data;
    }
}
