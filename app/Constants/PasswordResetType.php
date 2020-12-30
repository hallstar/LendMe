<?php

namespace App\Constants;

class PasswordResetType
{
    const ADMIN = 'Admin';

    const COMPANY = 'Company';

    const USER = 'User';

    public static $methods = [
        self::ADMIN,
        self::COMPANY,
        self::USER,
    ];
}