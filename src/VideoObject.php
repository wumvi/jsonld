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
        $data = [
            'caption' => $this->caption,
            'thumbnail' => $this->thumbnail,
        ];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'VideoObject';

        return $data;
    }
}
