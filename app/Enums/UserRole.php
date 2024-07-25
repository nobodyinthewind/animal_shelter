<?php

declare(strict_types=1);

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Adopter = 'adopter';
    case Vetter = 'vetter';
    case Volunteer = 'volunteer';
    case Blacklisted = 'blacklisted';
}
