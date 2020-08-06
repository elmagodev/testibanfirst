<?php

declare(strict_types=1);

namespace App\Model;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
interface BankInterface
{
    public function getName(): ?string;
    public function setName(?string $name): void;

    public function getBic(): ?string;
    public function setBic(?string $bic): void;

    public function getAddress(): ?Address;
    public function setAddress(?Address $address): void;
}
