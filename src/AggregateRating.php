<?php
declare(strict_types=1);

namespace JsonLd;

class AggregateRating extends Rating
{
    /**
     * The count of total number of ratings.
     *
     * @var int
     */
    private $ratingCount;

    /**
     * The count of total number of reviews.
     *
     * @var int
     */
    private $reviewCount;


    /**
     * @var Thing
     */
    private $itemReviewed;

    /**
     * @return int
     */
    public function getRatingCount(): int
    {
        return $this->ratingCount;
    }

    /**
     * @param int $ratingCount
     */
    public function setRatingCount(int $ratingCount): void
    {
        $this->ratingCount = $ratingCount;
    }

    /**
     * @return int
     */
    public function getReviewCount(): int
    {
        return $this->reviewCount;
    }

    /**
     * @param int $reviewCount
     */
    public function setReviewCount(int $reviewCount): void
    {
        $this->reviewCount = $reviewCount;
    }

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

    public function getProperties(): array
    {
        $data = [
            'itemReviewed' => $this->itemReviewed,
            'ratingCount' => $this->ratingCount,
            'reviewCount' => $this->reviewCount,
        ];

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'AggregateRating';

        return $data;
    }
}
