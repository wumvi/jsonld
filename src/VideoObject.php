<?php

namespace JsonLd;

class VideoObject extends MediaObject
{
    /**
     * @var string
     */
    private $caption;

    /**
     * @var ImageObject
     */
    private $thumbnail;

    public function getProperties(): array
    {
        $data = [];

        if ($this->caption) {
            $data['caption'] = $this->caption;
        }

        if ($this->thumbnail) {
            $data['thumbnail'] = $this->thumbnail;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'VideoObject';

        return $data;
    }
}
