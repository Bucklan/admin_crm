<?php

namespace App\Enums\User;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

final class Permission extends Enum implements LocalizedEnum
{
    const DASHBOARD = 'dashboard';
    const ORDERS = 'orders';
    const CLIENTS = 'clients';
    const MANAGERS = 'managers';
    const COURIERS = 'couriers';
    const CATEGORIES = 'categories';
    const GENRES = 'genres';
    const PRODUCTS = 'products';
    const CITIES = 'cities';
    const NOTIFICATIONS = 'notifications';
    const BANNERS = 'banners';
    const SETTINGS = 'settings';
    const PROMOCODES = 'promocodes';
    const HELP_SECTIONS = 'help_sections';
    const CONTACTS = 'contacts';
    const DELIVER = 'deliver';

    public static function asAvailableSelectArray(): array
    {
        return [
            self::DASHBOARD  => self::getDescription(self::DASHBOARD),
            self::ORDERS  => self::getDescription(self::ORDERS),
            self::CLIENTS  => self::getDescription(self::CLIENTS),
            self::MANAGERS  => self::getDescription(self::MANAGERS),
            self::COURIERS  => self::getDescription(self::COURIERS),
            self::CATEGORIES  => self::getDescription(self::CATEGORIES),
            self::GENRES  => self::getDescription(self::GENRES),
            self::PRODUCTS  => self::getDescription(self::PRODUCTS),
            self::CITIES  => self::getDescription(self::CITIES),
            self::NOTIFICATIONS  => self::getDescription(self::NOTIFICATIONS),
            self::BANNERS  => self::getDescription(self::BANNERS),
            self::SETTINGS  => self::getDescription(self::SETTINGS),
            self::PROMOCODES  => self::getDescription(self::PROMOCODES),
            self::HELP_SECTIONS  => self::getDescription(self::HELP_SECTIONS),
            self::CONTACTS  => self::getDescription(self::CONTACTS),
            self::DELIVER  => self::getDescription(self::DELIVER),
        ];
    }
}
