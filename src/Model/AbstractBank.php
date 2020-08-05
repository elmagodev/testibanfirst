<?php

declare(strict_types=1);

namespace App\Model;

abstract class AbstractBank implements BankInterface
{
    /** @var null|string */
    protected $name;

    /** @var null|string */
    protected $bic;

    /** @var null|Address */
    protected $address;

    /**
     * Get the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(? string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of bic
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * Set the value of bic
     */
    public function setBic(?string $bic): void
    {
        $this->bic = $bic;
    }

    /**
     * Get the value of address
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
}
