<?php

declare(strict_types=1);

namespace App\Model;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class Address
{
    /** @var null|string */
    private $street;

    /** @var null|string */
    private $postCode;

    /** @var null|string */
    private $city;

    /** @var null|string */
    private $province;

    /** @var string */
    private $country;
    

    /**
     * Get the value of street
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Set the value of street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * Get the value of postCode
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     */
    public function setPostCode(?string $postCode): void
    {
        $this->postCode = $postCode;
    }

    /**
     * Get the value of city
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Get the value of province
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * Set the value of province
     */
    public function setProvince(?string $province): void
    {
        $this->province = $province;
    }

    /**
     * Get the value of country
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Set the value of country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function __toString()
    {
        $string = '';
        if ($this->street !== null) {
            $string .= $this->street.', ';
        }
        if ($this->postCode !== null) {
            $string .= $this->postCode.', ';
        }
        if ($this->city !== null) {
            $string .= $this->city.', ';
        }
        if ($this->province !== null) {
            $string .= $this->province.', ';
        }
       
        return $string.$this->country;
    }
}
