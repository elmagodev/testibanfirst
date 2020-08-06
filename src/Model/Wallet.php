<?php

declare(strict_types=1);

namespace App\Model;

use DateTimeInterface;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class Wallet
{
    public const STATUS_AUTHORIZED='authorized';
    public const STATUS_LOCKED='locked';
    public const STATUS_UNAUTHORIZED='not authorized';

    public const AVAILABLE_STATUS=[
        self::STATUS_AUTHORIZED,
        self::STATUS_LOCKED,
        self::STATUS_UNAUTHORIZED
    ];
    
    /** @var null|string */
    private $id;

    /** @var null|string */
    private $currency;

    /** @var null|string */
    private $tag;

    /** @var null|string */
    private $status;

    /** @var null|string */
    private $accountNumber;

    /** @var null|Price */
    private $bookingAmount;

    /** @var null|Price */
    private $valueAmount;

    /** @var null|DateTimeInterface */
    private $dateLastFinancialMovement;

    /** @var null|CorrespondentBank */
    private $correspondentBank;

    /** @var null|HolderBank */
    private $holderBank;

    /** @var null|Holder */
    private $holder;

    /** @var null|Balance */
    private $balance;

    /**
     * Get the value of id
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Get the value of tag
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * Set the value of tag
     */
    public function setTag(?string $tag): void
    {
        $this->tag = $tag;
    }

    /**
     * Get the value of currency
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Get the value of dateLastFinancialMovement
     */
    public function getDateLastFinancialMovement(): ?DateTimeInterface
    {
        return $this->dateLastFinancialMovement;
    }

    /**
     * Set the value of dateLastFinancialMovement
     */
    public function setDateLastFinancialMovement(?DateTimeInterface $dateLastFinancialMovement): void
    {
        $this->dateLastFinancialMovement = $dateLastFinancialMovement;
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

    /**
     * Get the value of status
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Get the value of accountNumber
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Set the value of accountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Get the value of correspondentBank
     */
    public function getCorrespondentBank(): ?CorrespondentBank
    {
        return $this->correspondentBank;
    }

    /**
     * Set the value of correspondentBank
     */
    public function setCorrespondentBank(?CorrespondentBank $correspondentBank): void
    {
        $this->correspondentBank = $correspondentBank;
    }

    /**
     * Get the value of holderBank
     */
    public function getHolderBank(): ?HolderBank
    {
        return $this->holderBank;
    }

    /**
     * Set the value of holderBank
     *
     * @return  self
     */
    public function setHolderBank(?HolderBank $holderBank): void
    {
        $this->holderBank = $holderBank;
    }

    /**
     * Get the value of holder
     */
    public function getHolder(): ?Holder
    {
        return $this->holder;
    }

    /**
     * Set the value of holder
     */
    public function setHolder(?Holder $holder): void
    {
        $this->holder = $holder;
    }

    /**
     * Get the value of balance
     */
    public function getBalance(): ?Balance
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     */
    public function setBalance(?Balance $balance): void
    {
        $this->balance = $balance;
    }
}
