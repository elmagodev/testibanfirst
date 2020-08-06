<?php

declare(strict_types=1);

namespace App\Model;

use DateTimeInterface;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class FinancialMovement
{
    /** @var null|string */
    private $id;

    /** @var null|DateTimeInterface */
    private $bookingDate;

    /** @var null|string */
    private $walletId;

    /** @var null|DateTimeInterface */
    private $valueDate;

    /** @var null|Price */
    private $amount;

    /** @var null|string */
    private $orderingAccountNumber;

    /** @var null|string */
    private $orderingCustomer;

    /** @var null|string */
    private $orderingInstitution;

    /** @var null|Price */
    private $orderingAmount;

    /** @var null|string */
    private $beneficiaryAccountNumber;

    /** @var null|string */
    private $beneficiaryCustomer;

    /** @var null|string */
    private $beneficiaryInstitution;

    /** @var null|Price */
    private $beneficiaryAmount;

    /** @var null|string */
    private $remittanceInformation;

    /** @var null|string */
    private $chargesDetails;

    /** @var null|string */
    private $exchangeRate;

    /** @var null|string */
    private $typeLabel;

    /** @var null|string */
    private $internalReference;

    /** @var null|string */
    private $description;

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
     * Get the value of bookingDate
     */
    public function getBookingDate(): ?DateTimeInterface
    {
        return $this->bookingDate;
    }

    /**
     * Set the value of bookingDate
     */
    public function setBookingDate(?DateTimeInterface $bookingDate): void
    {
        $this->bookingDate = $bookingDate;
    }

    /**
     * Get the value of walletId
     */
    public function getWalletId(): ?string
    {
        return $this->walletId;
    }

    /**
     * Set the value of walletId
     */
    public function setWalletId(?string $walletId): void
    {
        $this->walletId = $walletId;
    }

    /**
     * Get the value of valueDate
     */
    public function getValueDate(): ?DateTimeInterface
    {
        return $this->valueDate;
    }

    /**
     * Set the value of valueDate
     */
    public function setValueDate(?DateTimeInterface $valueDate): void
    {
        $this->valueDate = $valueDate;
    }

    /**
     * Get the value of amount
     */
    public function getAmount(): ?Price
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     */
    public function setAmount(?Price $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Get the value of orderingAccountNumber
     */
    public function getOrderingAccountNumber(): ?string
    {
        return $this->orderingAccountNumber;
    }

    /**
     * Set the value of orderingAccountNumber
     */
    public function setOrderingAccountNumber(?string $orderingAccountNumber): void
    {
        $this->orderingAccountNumber = $orderingAccountNumber;
    }

    /**
     * Get the value of orderingCustomer
     */
    public function getOrderingCustomer(): ?string
    {
        return $this->orderingCustomer;
    }

    /**
     * Set the value of orderingCustomer
     */
    public function setOrderingCustomer(?string $orderingCustomer): void
    {
        $this->orderingCustomer = $orderingCustomer;
    }

    /**
     * Get the value of orderingInstitution
     */
    public function getOrderingInstitution(): ?string
    {
        return $this->orderingInstitution;
    }

    /**
     * Set the value of orderingInstitution
     */
    public function setOrderingInstitution(?string $orderingInstitution): void
    {
        $this->orderingInstitution = $orderingInstitution;
    }

    /**
     * Get the value of orderingAmount
     */
    public function getOrderingAmount(): ?Price
    {
        return $this->orderingAmount;
    }

    /**
     * Set the value of orderingAmount
     */
    public function setOrderingAmount(?Price $orderingAmount): void
    {
        $this->orderingAmount = $orderingAmount;
    }

    /**
     * Get the value of beneficiaryAccountNumber
     */
    public function getBeneficiaryAccountNumber(): ?string
    {
        return $this->beneficiaryAccountNumber;
    }

    /**
     * Set the value of beneficiaryAccountNumber
     */
    public function setBeneficiaryAccountNumber(?string $beneficiaryAccountNumber): void
    {
        $this->beneficiaryAccountNumber = $beneficiaryAccountNumber;
    }

    /**
     * Get the value of beneficiaryCustomer
     */
    public function getBeneficiaryCustomer(): ?string
    {
        return $this->beneficiaryCustomer;
    }

    /**
     * Set the value of beneficiaryCustomer
     */
    public function setBeneficiaryCustomer(?string $beneficiaryCustomer): void
    {
        $this->beneficiaryCustomer = $beneficiaryCustomer;
    }

    /**
     * Get the value of beneficiaryInstitution
     */
    public function getBeneficiaryInstitution(): ?string
    {
        return $this->beneficiaryInstitution;
    }

    /**
     * Set the value of beneficiaryInstitution
     */
    public function setBeneficiaryInstitution(?string $beneficiaryInstitution): void
    {
        $this->beneficiaryInstitution = $beneficiaryInstitution;
    }

    /**
     * Get the value of beneficiaryAmount
     */
    public function getBeneficiaryAmount(): ?Price
    {
        return $this->beneficiaryAmount;
    }

    /**
     * Set the value of beneficiaryAmount
     */
    public function setBeneficiaryAmount(?Price $beneficiaryAmount): void
    {
        $this->beneficiaryAmount = $beneficiaryAmount;
    }

    /**
     * Get the value of remittanceInformation
     */
    public function getRemittanceInformation(): ?string
    {
        return $this->remittanceInformation;
    }

    /**
     * Set the value of remittanceInformation
     */
    public function setRemittanceInformation(?string $remittanceInformation): void
    {
        $this->remittanceInformation = $remittanceInformation;
    }

    /**
     * Get the value of chargesDetails
     */
    public function getChargesDetails(): ?string
    {
        return $this->chargesDetails;
    }

    /**
     * Set the value of chargesDetails
     */
    public function setChargesDetails(?string $chargesDetails): void
    {
        $this->chargesDetails = $chargesDetails;
    }

    /**
     * Get the value of exchangeRate
     */
    public function getExchangeRate(): ?float
    {
        return (float) $this->exchangeRate;
    }

    /**
     * Set the value of exchangeRate
     */
    public function setExchangeRate(?string $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * Get the value of typeLabel
     */
    public function getTypeLabel(): ?string
    {
        return $this->typeLabel;
    }

    /**
     * Set the value of typeLabel
     */
    public function setTypeLabel(?string $typeLabel): void
    {
        $this->typeLabel = $typeLabel;
    }

    /**
     * Get the value of internalReference
     */
    public function getInternalReference(): ?string
    {
        return $this->internalReference;
    }

    /**
     * Set the value of internalReference
     */
    public function setInternalReference(?string $internalReference): void
    {
        $this->internalReference = $internalReference;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}