<?php

declare(strict_types=1);

use App\Enums\CurrencyFormat;
use App\Enums\DateFormat;
use App\Enums\IntervalFormat;
use App\Enums\NumberFormat;
use App\Enums\TimeFormat;
use App\Enums\Weekday;

return [

    'weekday' => [
        Weekday::Monday->value => 'Montag',
        Weekday::Tuesday->value => 'Dienstag',
        Weekday::Wednesday->value => 'Mittwoch',
        Weekday::Thursday->value => 'Donnerstag',
        Weekday::Friday->value => 'Freitag',
        Weekday::Saturday->value => 'Samstag',
        Weekday::Sunday->value => 'Sonntag',
    ],

    'number_format' => [
        NumberFormat::ThousandsPointDecimalComma->value => '1.111,11',
        NumberFormat::ThousandsCommaDecimalPoint->value => '1,111.11',
        NumberFormat::ThousandsSpaceDecimalComma->value => '1 111,11',
        NumberFormat::ThousandsSpaceDecimalPoint->value => '1 111.11',
        NumberFormat::ThousandsApostropheDecimalPoint->value => '1\'111.11',
    ],

    'date_format' => [
        DateFormat::PointSeparatedDMYYYY->value => 'T.M.JJJJ',
        DateFormat::SlashSeparatedMMDDYYYY->value => 'MM/TT/JJJJ',
        DateFormat::SlashSeparatedDDMMYYYY->value => 'TT/MM/JJJJ',
        DateFormat::HyphenSeparatedDDMMYYY->value => 'TT-MM-JJJJ',
        DateFormat::HyphenSeparatedMMDDDYYYY->value => 'MM-TT-JJJJ',
        DateFormat::HyphenSeparatedYYYYMMDD->value => 'JJJJ-MM-TT',
    ],

    'time_format' => [
        TimeFormat::TwelveHours->value => '12-Stunden-Format',
        TimeFormat::TwentyFourHours->value => '24-Stunden-Format',
    ],

    'interval_format' => [
        IntervalFormat::Decimal->value => 'Dezimal',
        IntervalFormat::HoursMinutes->value => '12h 3m',
        IntervalFormat::HoursMinutesColonSeparated->value => '12:03',
        IntervalFormat::HoursMinutesSecondsColonSeparated->value => '12:03:45',
    ],

    'currency_format' => [
        CurrencyFormat::ISOCodeBeforeWithSpace->value => 'EUR 111',
        CurrencyFormat::ISOCodeAfterWithSpace->value => '111 EUR',
        CurrencyFormat::SymbolBefore->value => '€111',
        CurrencyFormat::SymbolAfter->value => '111€',
        CurrencyFormat::SymbolBeforeWithSpace->value => '€ 111',
        CurrencyFormat::SymbolAfterWithSpace->value => '111 €',
    ],

];
