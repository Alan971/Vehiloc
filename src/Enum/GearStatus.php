<?php

namespace App\Enum;

enum GearStatus: string
{
    case Manuelle = 'Manuelle';
    case Automatique = 'Automatique';
    
    public function getLabel(): string
    {
        return match ($this) {
            self::Manuelle => 'Manuelle',
            self::Automatique => 'Automatique',
        };
    }
}