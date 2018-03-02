<?php
declare(strict_types=1);

namespace JsonLd;

class Organization extends Thing
{
    /**
     * @var ImageObject
     */
    private $logo;

    /**
     * @return ImageObject
     */
    public function getLogo(): ImageObject
    {
        return $this->logo;
    }

    /**
     * @param ImageObject $logo
     */
    public function setLogo(ImageObject $logo): void
    {
        $this->logo = $logo;
    }

    public function getProperties(): array
    {
        $data = [];

        if ($this->logo) {
            $data['logo'] = $this->logo;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Organization';

        return $data;
    }
}
