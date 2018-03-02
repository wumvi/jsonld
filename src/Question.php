<?php
declare(strict_types=1);

namespace JsonLd;

class Question extends CreativeWork
{
    /**
     * @var Answer
     */
    private $acceptedAnswer;

    /**
     * @var int
     */
    private $answerCount;

    /**
     * @var int
     */
    private $downvoteCount;

    /**
     * @var Answer
     */
    private $suggestedAnswer;

    /**
     * @var int
     */
    private $upvoteCount;

    /**
     * @return Answer
     */
    public function getAcceptedAnswer(): Answer
    {
        return $this->acceptedAnswer;
    }

    /**
     * @param Answer $acceptedAnswer
     */
    public function setAcceptedAnswer(Answer $acceptedAnswer): void
    {
        $this->acceptedAnswer = $acceptedAnswer;
    }

    /**
     * @return int
     */
    public function getAnswerCount(): int
    {
        return $this->answerCount;
    }

    /**
     * @param int $answerCount
     */
    public function setAnswerCount(int $answerCount): void
    {
        $this->answerCount = $answerCount;
    }

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
     * @return Answer
     */
    public function getSuggestedAnswer(): Answer
    {
        return $this->suggestedAnswer;
    }

    /**
     * @param Answer $suggestedAnswer
     */
    public function setSuggestedAnswer(Answer $suggestedAnswer): void
    {
        $this->suggestedAnswer = $suggestedAnswer;
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

        if ($this->acceptedAnswer) {
            $data['acceptedAnswer'] = $this->acceptedAnswer;
        }

        if ($this->answerCount) {
            $data['answerCount'] = $this->answerCount;
        }

        if ($this->downvoteCount) {
            $data['downvoteCount'] = $this->downvoteCount;
        }

        if ($this->suggestedAnswer) {
            $data['suggestedAnswer'] = $this->suggestedAnswer;
        }

        if ($this->upvoteCount) {
            $data['upvoteCount'] = $this->upvoteCount;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Question';

        return $data;
    }
}
