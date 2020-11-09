<?php


class Speedometer
{
    const KM = 1.60934;
    const MILES = 0.621371;

    public static function retrieveMiles(float $kilometre)
    {
        return $kilometre * self::KM;
    }
    public static function retrieveKilometer(float $miles)
    {
        return $miles * self::MILES;
    }


}