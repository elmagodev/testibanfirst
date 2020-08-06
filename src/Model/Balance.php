<?php

declare(strict_types=1);

namespace App\Model;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class Balance
{
    /** @var null|string */
    private $closingDate;

    /** @var null|Price */
    private $bookingAmount;

    /** @var null|Price */
    private $valueAmount;

    /**
     * Get the value of closingDate
     */ 
    public function getClosingDate(): ?string
    {
        return $this->closingDate;
    }

    /**
     * Set the value of closingDate
     */ 
    public function setClosingDate(?string $closingDate): void
    {
        $this->closingDate = $closingDate;
    }

    /**
     * Get the value of bookingAmount
     */
    public function getBookingAmount(): ?Price
    {
        return $this->bookingAmount;
    }

    /**
     * Set the value of bookingAmount
     */
    public function setBookingAmount(?Price $bookingAmount): void
    {
        $this->bookingAmount = $bookingAmount;
    }

    /**
     * Get the value of valueAmount
     */
    public function getValueAmount(): ?Price
    {
        return $this->valueAmount;
    }

    /**
     * Set the value of valueAmount
     */
    public function setValueAmount(?Price $valueAmount): void
    {
        $this->valueAmount = $valueAmount;
    }
}