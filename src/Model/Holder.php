<?php

declare(strict_types=1);

namespace App\Model;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class Holder
{
    public const TYPE_INDIVIDUAL='individual';
    public const TYPE_CORPORATE='corporate';
    public const TYPES = [
        'holder.type.individual' => self::TYPE_INDIVIDUAL,
        'holder.type.corporate' => self::TYPE_CORPORATE,
    ];

    /** @var string */
    private $name;

    /** @var string */
    private $type;

    /** @var null|Address */
    private $address;

    

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
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
