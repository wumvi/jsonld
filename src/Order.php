<?php
declare(strict_types=1);

namespace JsonLd;

/**
 * Class Order
 *
 * @see https://yandex.ru/support/webmaster/mail/order.html#inst
 */
class Order extends Thing
{
    const ORDER_STATUS_PROCESSING = 'OrderProcessing';
    const ORDER_STATUS_PROBLEM = 'OrderProblem';
    const ORDER_STATUS_CANCELLED = 'OrderCancelled';

    /**
     * @var Organization
     */
    private $merchant;

    /**
     * @return Organization
     */
    public function getMerchant(): Organization
    {
        return $this->merchant;
    }

    /**
     * @param Organization $merchant
     */
    public function setMerchant(Organization $merchant): void
    {
        $this->merchant = $merchant;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     */
    public function setOrderNumber(string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus(string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string
     */
    public function getPriceCurrency(): string
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     */
    public function setPriceCurrency(string $priceCurrency): void
    {
        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @return string
     */
    public function getExpectedArrivalUntil(): string
    {
        return $this->expectedArrivalUntil;
    }

    /**
     * @param string $expectedArrivalUntil
     */
    public function setExpectedArrivalUntil(string $expectedArrivalUntil): void
    {
        $this->expectedArrivalUntil = $expectedArrivalUntil;
    }

    /**
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     */
    public function setTrackingNumber(string $trackingNumber): void
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     */
    public function setTrackingUrl(string $trackingUrl): void
    {
        $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return Offer
     */
    public function getAcceptedOffer(): Offer
    {
        return $this->acceptedOffer;
    }

    /**
     * @param Offer $acceptedOffer
     */
    public function setAcceptedOffer(Offer $acceptedOffer): void
    {
        $this->acceptedOffer = $acceptedOffer;
    }

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var string
     */
    private $orderStatus;

    /**
     * @var string
     */
    private $priceCurrency;

    /**
     * @var string
     */
    private $expectedArrivalUntil;

    /**
     * @var string
     */
    private $trackingNumber;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $trackingUrl;

    /**
     * @var Offer
     */
    private $acceptedOffer;

    public function getProperties(): array
    {
        $data = [];

        if ($this->merchant) {
            $data['merchant'] = $this->merchant;
        }

        if ($this->orderNumber) {
            $data['orderNumber'] = $this->orderNumber;
        }

        if ($this->orderStatus) {
            $data['orderStatus'] = $this->orderStatus;
        }

        if ($this->priceCurrency) {
            $data['priceCurrency'] = $this->priceCurrency;
        }

        if ($this->price) {
            $data['price'] = $this->price;
        }

        if ($this->expectedArrivalUntil) {
            $data['expectedArrivalUntil'] = $this->expectedArrivalUntil;
        }

        if ($this->trackingNumber) {
            $data['trackingNumber'] = $this->trackingNumber;
        }

        if ($this->trackingUrl) {
            $data['trackingUrl'] = $this->trackingUrl;
        }

        if ($this->acceptedOffer) {
            $data['acceptedOffer'] = $this->acceptedOffer;
        }

        return $data + parent::getProperties();
    }

    public function getModel(): array
    {
        $data = $this->getProperties();
        $data['@type'] = 'Order';

        return $data;
    }
}
