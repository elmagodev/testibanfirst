<?php

declare(strict_types=1);

namespace App\Model;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class HolderBank extends AbstractBank
{
    /** @var null|string */
    private $clearingCodeType;

    /** @var null|string */
    private $clearingCode;

    /**
     * Get the value of clearingCodeType
     */
    public function getClearingCodeType(): ?string
    {
        return $this->clearingCodeType;
    }

    /**
     * Set the value of clearingCodeType
     */
    public function setClearingCodeType(?string $clearingCodeType): void
    {
        $this->clearingCodeType = $clearingCodeType;
    }

    /**
     * Get the value of clearingCode
     */
    public function getClearingCode(): ?string
    {
        return $this->clearingCode;
    }

    /**
     * Set the value of clearingCode
     */
    public function setClearingCode(? string $clearingCode): void
    {
        $this->clearingCode = $clearingCode;
    }
}
