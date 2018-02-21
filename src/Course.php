<?php

namespace JsonLd;

/**
 * Class Course
 *
 * @see https://developers.google.com/search/docs/data-types/course
 */
class Course extends CreativeWork
{
    public function getProperties(): array
    {
        $data = [];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Course';

        return $data;
    }
}
