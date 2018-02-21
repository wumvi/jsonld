<?php

namespace JsonLd;

class Review extends CreativeWork
{
    /**
     * @var Thing
     */
    private $itemReviewed;

    /**
     * @var string
     */
    private $reviewBody;

    /**
     * @var Rating
     */
    private $reviewRating;

    /**
     * @return Thing
     */
    public function getItemReviewed(): Thing
    {
        return $this->itemReviewed;
    }

    /**
     * @param Thing $itemReviewed
     */
    public function setItemReviewed(Thing $itemReviewed): void
    {
        $this->itemReviewed = $itemReviewed;
    }

    /**
     * @return string
     */
    public function getReviewBody(): string
    {
        return $this->reviewBody;
    }

    /**
     * @param string $reviewBody
     */
    public function setReviewBody(string $reviewBody): void
    {
        $this->reviewBody = $reviewBody;
    }

    /**
     * @return Rating
     */
    public function getReviewRating(): Rating
    {
        return $this->reviewRating;
    }

    /**
     * @param Rating $reviewRating
     */
    public function setReviewRating(Rating $reviewRating): void
    {
        $this->reviewRating = $reviewRating;
    }

    public function getProperties(): array
    {
        $data = [
            'itemReviewed' => $this->itemReviewed,
            'reviewBody' => $this->reviewBody,
        ];

        if ($this->reviewRating) {
            $data['reviewRating'] = $this->reviewRating;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Review';

        return $data;
    }
}
