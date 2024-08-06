<?php

namespace App\Entity;

use App\Enum\GearStatus;
use App\Repository\VoitureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(length: 255)]
    // private ?string $Marque = null;

    #[Assert\NotBlank()]
    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    // #[ORM\Column(length: 255)]
    // private ?string $RentAgency = null;

    #[Assert\Type(type: 'integer')]
    #[ORM\Column]
    private ?int $SeatNumber = null;

    #[ORM\Column(length: 255)]
    private ?GearStatus $GearType = null;

    #[ORM\Column(type : 'integer')]
    private ?int $PricePerDay = null;

    #[ORM\Column(type : 'integer')]
    private ?int $PricePerMonth = null;

    // #[ORM\Column(length: 255)]
    // private ?string $PowerType = null;

    #[ORM\Column(length: 255, nullable: true, type : Types::TEXT)]
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

    public function getGearType(): ?GearStatus
    {
        return $this->GearType;
    }

    public function setGearType(GearStatus $GearType): static
    {
        $this->GearType = $GearType;

        return $this;
    }

    public function getPricePerDay(): ?int
    {
        return $this->PricePerDay;
    }

    public function setPricePerDay(int $PricePerDay): static
    {
        $this->PricePerDay = $PricePerDay;

        return $this;
    }

    public function getPricePerMonth(): ?int
    {
        return $this->PricePerMonth;
    }

    public function setPricePerMonth(int $PricePerMonth): static
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
