<?php

namespace JsonLd;

class Comment extends CreativeWork
{
    /**
     * @var int
     */
    private $downvoteCount;

    /**
     * @var int
     */
    private $upvoteCount;

    /**
     * @return int
     */
    public function getDownvoteCount(): int
    {
        return $this->downvoteCount;
    }

    /**
     * @param int $downvoteCount
     */
    public function setDownvoteCount(int $downvoteCount): void
    {
        $this->downvoteCount = $downvoteCount;
    }

    /**
     * @return int
     */
    public function getUpvoteCount(): int
    {
        return $this->upvoteCount;
    }

    /**
     * @param int $upvoteCount
     */
    public function setUpvoteCount(int $upvoteCount): void
    {
        $this->upvoteCount = $upvoteCount;
    }

    public function getProperties(): array
    {
        $data = [];

        if ($this->upvoteCount) {
            $data['upvoteCount'] = $this->upvoteCount;
        }

        if ($this->downvoteCount) {
            $data['downvoteCount'] = $this->downvoteCount;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Comment';

        return $data;
    }
}
