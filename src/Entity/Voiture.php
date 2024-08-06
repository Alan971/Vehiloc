<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(length: 255)]
    // private ?string $Marque = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    // #[ORM\Column(length: 255)]
    // private ?string $RentAgency = null;

    #[ORM\Column]
    private ?int $SeatNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $GearType = null;

    #[ORM\Column]
    private ?float $PricePerDay = null;

    #[ORM\Column]
    private ?float $PricePerMonth = null;

    // #[ORM\Column(length: 255)]
    // private ?string $PowerType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Comment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getMarque(): ?string
    // {
    //     return $this->Marque;
    // }

    // public function setMarque(string $Marque): static
    // {
    //     $this->Marque = $Marque;

    //     return $this;
    // }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    // public function getRentAgency(): ?string
    // {
    //     return $this->RentAgency;
    // }

    // public function setRentAgency(string $RentAgency): static
    // {
    //     $this->RentAgency = $RentAgency;

    //     return $this;
    // }

    public function getSeatNumber(): ?int
    {
        return $this->SeatNumber;
    }

    public function setSeatNumber(int $SeatNumber): static
    {
        $this->SeatNumber = $SeatNumber;

        return $this;
    }

    public function getGearType(): ?string
    {
        return $this->GearType;
    }

    public function setGearType(string $GearType): static
    {
        $this->GearType = $GearType;

        return $this;
    }

    public function getPricePerDay(): ?float
    {
        return $this->PricePerDay;
    }

    public function setPricePerDay(float $PricePerDay): static
    {
        $this->PricePerDay = $PricePerDay;

        return $this;
    }

    public function getPricePerMonth(): ?float
    {
        return $this->PricePerMonth;
    }

    public function setPricePerMonth(float $PricePerMonth): static
    {
        $this->PricePerMonth = $PricePerMonth;

        return $this;
    }

    // public function getPowerType(): ?string
    // {
    //     return $this->PowerType;
    // }

    // public function setPowerType(string $PowerType): static
    // {
    //     $this->PowerType = $PowerType;

    //     return $this;
    // }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(?string $Comment): static
    {
        $this->Comment = $Comment;

        return $this;
    }
}
