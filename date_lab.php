<?php

function showNow(): string
{
    // Sets timestamp for current datetime
    $timestamp = time();

    // formats timestamp
    $formatted_timestamp = date('m/d/Y g:i a', $timestamp);

    return $formatted_timestamp;
}

function showStringDate(string $str)
{
    // converts str to time
    $timestamp = strtotime($str);
    $formatted_timestamp = date('m/d/Y g:i a', $timestamp);
    $output = "Raw timestamp: " . $timestamp . ", Formatted timestamp: " . $formatted_timestamp;
    return $output;
}

function showFourthOfJuly()
{
    // Create/Get a unix timestamp
    $fourth_of_july = mktime(9, 00, 0, 7, 4, 2026);

    $formatted_fourth = date('F j, Y \a\t g:i a', $fourth_of_july);
    return $formatted_fourth;
}

function addThirtyDaysBySeconds()
{
    $timestamp = time();
    $secondsToAdd = (30 * 24 * 60 * 60);
    $futureTimestamp = strtotime("+ $secondsToAdd seconds", $timestamp);
    $formatted_timestamp = date("Y-m-d h:i a", $futureTimestamp);
    return $formatted_timestamp;
}

function addOneYearRelative()
{
    $timestamp = time();
    $futureTimestamp = strtotime("+ 1 year", $timestamp);
    $formatted_timestamp = date("Y-m-d h:i", $futureTimestamp);
    return $formatted_timestamp;
}

function showCentralTime()
{
    $timestamp = time();
    echo '6. showCentralTime(): ' . "\n" . 'Current time/date: ' . date("Y-m-d h:i a", $timestamp) . "\n";
    date_default_timezone_set('America/Chicago') . "\n";
    echo 'Current time/date (CST): ' . date("Y-m-d h:i a", $timestamp);

}




echo "\n" . '1. showNow(): ' . showNow() . "\n\n";
echo "2a. showStringDate('next Friday'): " . showStringDate("next Friday") . "\n\n";
echo "2b. showStringDate('2025-12-25'): " . showStringDate("2025-12-25") . "\n\n";
echo "3. showFourthOfJuly(): " . showFourthOfJuly() . "\n\n";
echo "4. addThirtyDaysBySeconds(): " . addThirtyDaysBySeconds() . "\n\n";
echo "5. addOneYearRelative(): " . addOneYearRelative() . "\n\n";
echo showCentralTime() . "\n\n";
?>