<?php

namespace Fun;

class Time
{
    /**
     * Takes the time in 12 hour format, example: "01:15:59PM"
     * Returns the time in 24 hour format, example: "13:15:59"
     *
     * Pre-Conditions:
     * 01 <= hh <= 12
     * 00 <= mm,ss <= 59
     *
     * Post-Conditions:
     * 00 <= hh < 24
     *
     * @param string $timeIn12HourFormat
     * @return string
     */
    public function convert12hTimeTo24hTime($timeIn12HourFormat)
    {
        return (new \DateTime($timeIn12HourFormat))->format('H:i:s');
    }
}