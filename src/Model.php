<?php
declare(strict_types=1);

namespace JsonLd;

/**
 * Class Model
 *
 * @see https://technicalseo.com/seo-tools/schema-markup-generator/
 */
abstract class Model implements \JsonSerializable
{
    public abstract function getProperties(): array;
    public abstract function getModel(): array;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getModel();
    }

    public function getJson(): string
    {
        $json = $this->getModel();
        $json['@context'] = 'http://schema.org/';

        return json_encode($json);
    }
}
