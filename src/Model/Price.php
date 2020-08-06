<?php

declare(strict_types=1);

namespace App\Model;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class Price
{
    /** @var float */
    private $value;

    /** @var string */
    private $currency;

    /**
     * Get the value of value
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Set the value of value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * Get the value of currency
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
}
