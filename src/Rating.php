<?php

namespace JsonLd;

class Rating extends Thing
{
    /**
     * The author of this content or rating.
     *
     * @var Person
     */
    private $author;

    /**
     * @var int
     */
    private $bestRating;

    /**
     * @var int
     */
    private $ratingValue;

    /**
     * @var int
     */
    private $worstRating;

    /**
     * @return int
     */
    public function getRatingValue(): int
    {
        return $this->ratingValue;
    }

    /**
     * @param int $ratingValue
     */
    public function setRatingValue(int $ratingValue): void
    {
        $this->ratingValue = $ratingValue;
    }

    /**
     * @return int
     */
    public function getBestRating(): int
    {
        return $this->bestRating;
    }

    /**
     * @param int $bestRating
     */
    public function setBestRating(int $bestRating): void
    {
        $this->bestRating = $bestRating;
    }

    /**
     * @return int
     */
    public function getWorstRating(): int
    {
        return $this->worstRating;
    }

    /**
     * @param int $worstRating
     */
    public function setWorstRating(int $worstRating): void
    {
        $this->worstRating = $worstRating;
    }

    /**
     * @return Person
     */
    public function getAuthor(): Person
    {
        return $this->author;
    }

    /**
     * @param Person $author
     */
    public function setAuthor(Person $author): void
    {
        $this->author = $author;
    }

    public function getProperties(): array
    {
        $data = [
            'ratingValue' => $this->ratingValue,
            'worstRating' => $this->worstRating,
            'bestRating' => $this->bestRating,
        ];

        if ($this->author) {
            $data['author'] = $this->author;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Rating';

        return $data;
    }
}