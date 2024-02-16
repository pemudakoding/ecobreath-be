<?php

namespace App\Enums;

enum Role: string
{
    case admin = 'Admin';

    case volunteer = 'Volunteer';

    case user = 'Masyarakat';
}
